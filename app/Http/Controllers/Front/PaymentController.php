<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
class PaymentController extends Controller
{
    public function index(Request $request, $bookingId)
    {
        $booking = Booking::with(['item.brand', 'item.type'])->findOrFail($bookingId);
        $formatted_dt1 = Carbon::parse($booking->start_date);
        $formatted_dt2 = Carbon::parse($booking->end_date);
        $date_diff = $formatted_dt1->diffInDays($formatted_dt2);
        $ppn = $booking->item->price * $date_diff * (10 / 100);

        return view('payment', [
            'booking' => $booking,
            'days' => $date_diff,
            'ppn' => $ppn
        ]);
    }

    // public function detail(Request $request, $bookingId)
    // {
    //     $booking = Booking::with(['item.brand', 'item.type'])->findOrFail($bookingId);

    //     return view('payment-detail', [
    //         'booking' => $booking
    //     ]);
    // }

    public function update(Request $request, $bookingId)
    {
        $validator = Validator::make($request->all(), [
            'payment_method' => 'required',            
        ]);
        if ($validator->fails()) {
            // return redirect('post/create')
            // ->withErrors($validator)
            // ->withInput();
            return redirect()->route('front.payment', $bookingId)->with('error', $validator->errors()->first());                                             
        }

        $booking = Booking::findOrFail($bookingId);
        $booking->payment_method = $request->payment_method;

        if ($request->payment_method == 'midtrans') {
            // Call Midtrans API
            \Midtrans\Config::$serverKey = config('services.midtrans.serverKey');
            \Midtrans\Config::$isProduction = config('services.midtrans.isProduction');
            \Midtrans\Config::$isSanitized = config('services.midtrans.isSanitized');
            \Midtrans\Config::$is3ds = config('services.midtrans.is3ds');

            // Get USD to IDR rate using guzzle
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.exchangerate-api.com/v4/latest/USD');
            $body = $response->getBody();
            $rate = json_decode($body)->rates->IDR;

            // Convert to IDR
            $totalPrice = $booking->total_price * $rate;
            $dateTimeFormatMidtrans = Carbon::now()->format('YmdHis');
            // Create Midtrans Params
            $midtransParams = [
                'transaction_details' => [
                    'order_id' => $dateTimeFormatMidtrans."-". $booking->id,
                    'gross_amount' => (int) $totalPrice,
                ],
                'customer_details' => [
                    'first_name' => $booking->customer_name,
                    'email' => $booking->customer_email,
                ],
                'enabled_payments' => ['gopay', 'bank_transfer'],
                'vtweb' => []
            ];



            // Get Snap Payment Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($midtransParams)->redirect_url;

            // Save payment URL to booking
            $booking->payment_url = $paymentUrl;
            $booking->save();

            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
        }

        return redirect()->route('front.index');
    }

    public function success(Request $request)
    {
        $controllerName = Route::currentRouteAction(); // string
        $orderId = $request->order_id;
        $statusCode = $request->status_code;
        $transactionStatus = $request->transaction_status;
        Log::info('[{controllerName}] orderId: {orderId}',['orderId' => $orderId,'controllerName' => $controllerName]);
        Log::info('[{controllerName}] statusCode: {statusCode}',['statusCode' => $statusCode,'controllerName' => $controllerName]);
        Log::info('[{controllerName}] transactionStatus: {transactionStatus}',['transactionStatus' => $transactionStatus,'controllerName' => $controllerName]);
        return view('success');
        // return redirect()->route('front.payment.success');
        
    }
}
