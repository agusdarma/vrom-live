<?php

namespace App\Http\Controllers\API;


use Midtrans\Config;
use App\Models\Booking;
use Midtrans\Notification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class MidtransCallbackController extends Controller
{
    public function callback()
    {
        // Set konfigurasi midtrans
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        // Buat instance midtrans notification
        $notification = new Notification();

        // Assign ke variable untuk memudahkan coding
        $serverKey = config('services.midtrans.serverKey');
        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $orderId = $notification->order_id;
        $grossAmount = $notification->gross_amount;
        $statusCode = $notification->status_code;
        $signatureKeyHost = $notification->signature_key;
        $inputMidtrans = $orderId . $statusCode . $grossAmount . $serverKey;
        $signatureMidtrans = openssl_digest($inputMidtrans, 'sha512');
        Log::info('midtrans: {signatureMidtrans}', ['signatureMidtrans' => $signatureMidtrans]);
        Log::info('signatureKeyHost: {signatureKeyHost}', ['signatureKeyHost' => $signatureKeyHost]);
        Log::info('awal orderId: {orderId}', ['orderId' => $orderId]);

        $orderId_arr = explode ("-", $orderId); 
        Log::info('explode orderId: {orderId}', ['orderId' => $orderId_arr[1]]);
        $orderId = $orderId_arr[1];
        Log::info('akhir orderId: {orderId}', ['orderId' => $orderId]);
        // $orderId = "1111";
        // $statusCode = "200";
        // $grossAmount = "100000.00";
        // $serverKey = "askvnoibnosifnboseofinbofinfgbiufglnbfg";
        // $input = $orderId.$statusCode.$grossAmount.$serverKey;
        // $signature = openssl_digest($input, 'sha512');
        // echo "INPUT: " , $input."<br/>";
        // echo "SIGNATURE: " , $signature;



        // Cari transaksi berdasarkan ID
        $booking = Booking::where('id', $orderId)->first();

        if($booking != null){
            $orderIdDb = $booking->id;
            $grossAmountDb = $booking->total_price;
            $inputDb = $orderIdDb . $statusCode . $grossAmountDb . $serverKey;
            $signatureDb = openssl_digest($inputDb, 'sha512');
            Log::info('signatureDb: {signatureDb}', ['signatureDb' => $signatureDb]);
    
            // Handle notification status midtrans
            if ($status == 'capture') {
                if ($type == 'credit_card') {
                    if ($fraud == 'challenge') {
                        $booking->payment_status = 'pending';
                    } else {
                        $booking->payment_status = 'success';
                    }
                }
            } elseif ($status == 'settlement') {
                $booking->payment_status = 'success';
            } elseif ($status == 'pending') {
                $booking->payment_status = 'pending';
            } elseif ($status == 'deny') {
                $booking->payment_status = 'cancelled';
            } elseif ($status == 'expire') {
                $booking->payment_status = 'cancelled';
            } elseif ($status == 'cancel') {
                $booking->payment_status = 'cancelled';
            }
    
            // Simpan transaksi
            $booking->save();
        }

        

        // Return response
        return response()->json([
            'meta' => [
                'code' => 200,
                'message' => 'Midtrans Notification Success'
            ]
        ]);
    }
}
