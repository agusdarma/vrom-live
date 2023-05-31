<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RepaymentController extends Controller
{
    public function index(Request $request, $bookingId)
    {
        $booking = Booking::with(['item.brand', 'item.type'])->findOrFail($bookingId);
        $formatted_dt1 = Carbon::parse($booking->start_date);
        $formatted_dt2 = Carbon::parse($booking->end_date);
        $date_diff = $formatted_dt1->diffInDays($formatted_dt2);
        $ppn = $booking->item->price * $date_diff * (10 / 100);

        return view('repayment', [
            'booking' => $booking,
            'days' => $date_diff,
            'ppn' => $ppn
        ]);
    }

    public function update(Request $request, $bookingId)
    {
        
        $booking = Booking::where('id', $bookingId)->first();

        if ($booking->payment_method == 'midtrans') {

            // Redirect to Snap Payment Page
            return redirect($booking->payment_url);
        }

        return redirect()->route('front.index');
    }

}
