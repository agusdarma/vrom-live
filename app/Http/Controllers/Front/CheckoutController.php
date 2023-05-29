<?php

namespace App\Http\Controllers\Front;

use Carbon\Carbon;
use App\Models\Item;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function index(Request $request, $slug)
    {
        $controllerName = Route::currentRouteAction(); // string
        $item = Item::with(['type', 'brand'])->whereSlug($slug)->firstOrFail();

        $priceBase = $item->price;
        $price1Month = $priceBase*1;
        $price3Month = ($priceBase*3)*0.9/3;
        $price6Month = ($priceBase*6)*0.8/6;
        $price12Month = ($priceBase*12)*0.5/12;
        // dd($priceBase);
        Log::info('[{controllerName}] priceBase: {priceBase}, price1Month: {price1Month}, price3Month: {price3Month} , price6Month: {price6Month}
        , price12Month: {price12Month}  ',['priceBase' => $priceBase,'price1Month' => $price1Month,'price3Month' => $price3Month,
        'price6Month' => $price6Month,'price12Month' => $price12Month,'controllerName' => $controllerName]);


        return view('checkout', [
            'item' => $item,
            'price1Month' => $price1Month,
            'price3Month' => $price3Month,
            'price6Month' => $price6Month,
            'price12Month' => $price12Month,
        ]);
    }

    public function store(Request $request, $slug)
    {
        // dd($request);
        $controllerName = Route::currentRouteAction(); // string
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'no_hp' => 'required',
        //     'rental_time' => 'required',
        //     'telegram_id' => 'required',
        //     'item_name' => 'required',

        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'rental_time' => 'required',
            'telegram_id' => 'required',
            'item_name' => 'required',
        ]);

        if ($validator->fails()) {
            // return redirect('post/create')
            // ->withErrors($validator)
            // ->withInput();
            return redirect()->route('front.checkout', $slug)->with('error', $validator->errors()->first());                                             
        }
        
        $name = $request->name;               
        $email = $request->email;               
        $no_hp = $request->no_hp;               
        $rental_time = $request->rental_time;               
        $telegram_id = $request->telegram_id;               
        $item_name = $request->item_name;   

        Log::info('[{controllerName}] rental_time: {rental_time}',['rental_time' => $rental_time,'controllerName' => $controllerName]);

        // Format start_date and end_date from dd mm yyyy to timestamp
        // $start_date = Carbon::createFromFormat('d m Y', now());
        // $end_date = Carbon::createFromFormat('d m Y', now());

        // Count the number of days between start_date and end_date
        // $days = $start_date->diffInDays($end_date);

        // Get the item
        $item = Item::whereSlug($slug)->firstOrFail();
        // Calculate the total price       
        $priceBase = $item->price;
        $price1Month = $priceBase*1;
        $price3Month = ($priceBase*3)*0.9;
        $price6Month = ($priceBase*6)*0.8;
        $price12Month = ($priceBase*12)*0.5;
        
        switch ($rental_time) {
            case "1":
                $total_price = $price1Month;
              break;
            case "3":
                $total_price = $price3Month;
              break;
            case "6":
                $total_price = $price6Month;
              break;
            case "12":
                $total_price = $price12Month;                
              break;            
          }
        $discount = "";
        Log::info('total_price: {total_price}', ['total_price' => $total_price]);
        
        $booking = Booking::where('email', $email)->first();
        // dd($booking);
        if ($booking == null) {
            $total_price = $total_price*0.9;
            Log::info('Total_price after discount first rented: {total_price}', ['total_price' => $total_price]);
            $discount = "ada";
         }
         Log::info('discount: {discount}', ['discount' => $discount]);
        // Create a new booking
        
        $booking = $item->bookings()->create([
            'name' => $name,
            'item_name' => $item_name,
            'rental_price' => $priceBase,
            'rental_time' => $rental_time,
            'email' => $email,
            'no_hp' => $no_hp,
            'telegram_id' => $telegram_id,
            'total_price' => $total_price,                        
            'user_id' => auth()->user()->id,
            'item_id' => $item->id,
            'discount' => $discount,
        ]);

        return redirect()->route('front.payment', $booking->id)->with('success', 'Checkout successful, please confirm your rented before payment.');
    }
}
