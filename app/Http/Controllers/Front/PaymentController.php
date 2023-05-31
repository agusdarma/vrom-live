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
        // https://github.com/Midtrans/midtrans-php
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
         
            $itemPrice = $booking->rental_price * $rate;
            $totalPrice = $booking->total_price * $rate;
            $qty = 1;
            $dateTimeFormatMidtrans = Carbon::now()->format('YmdHis');
                   
            // Required
            $transaction_details = array(
                'order_id' => $dateTimeFormatMidtrans."-". $booking->id,
                'gross_amount' => (int) $totalPrice,
            );

            // Optional
            $item1_details = array(    
                'id' => $booking->id,
                'price' => (int) $itemPrice,
                'quantity' => (int) $qty,
                'name' => $booking->item_name,
            );

            // Optional
            // $item2_details = array(
            //     'id' => 'a2',
            //     'price' => 45000,
            //     'quantity' => 1,
            //     'name' => "Orange"
            // );

            // Optional
            $item_details = array ($item1_details);

            // Optional
            $customer_details = array(
                'first_name'    => $booking->name, 
                'email'         => $booking->user->email,
                'phone'         => $booking->user->phone,    
            );

            // Fill SNAP API parameter
            $params = array(
                'transaction_details' => $transaction_details,
                'customer_details' => $customer_details,
                'item_details' => $item_details,
            );

            // dd($params);


           

            // Get Snap Payment Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;

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
        $orderId_arr = explode ("-", $orderId); 
        $orderId = $orderId_arr[1];
        $booking = Booking::where('id', $orderId)->first();
        $orderIdDb = $booking->id;
        $statusCode = $request->status_code;
        $transactionStatus = $request->transaction_status;
        Log::info('[{controllerName}] orderId: {orderId}',['orderId' => $orderId,'controllerName' => $controllerName]);
        Log::info('[{controllerName}] statusCode: {statusCode}',['statusCode' => $statusCode,'controllerName' => $controllerName]);
        Log::info('[{controllerName}] transactionStatus: {transactionStatus}',['transactionStatus' => $transactionStatus,'controllerName' => $controllerName]);
        // return view('mybookings');

        if($transactionStatus == 'pending' and $statusCode == '201'){
            return redirect()->route('front.repayment',$orderIdDb);
        }else if($transactionStatus == 'settlement' and $statusCode == '200'){
            return redirect()->route('front.index')->with('success', 'Payment successful, please check your email for next instruction.');
        }

        
        
    }
}
