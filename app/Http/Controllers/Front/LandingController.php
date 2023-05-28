<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        // $items = Item::with(['type', 'brand'])->latest()->take(4)->get()->reverse();
        $euro = Item::with(['type', 'brand'])->whereName('Euro Swing Master')->take(4)->get()->firstOrFail();
        $golden = Item::with(['type', 'brand'])->whereName('Golden Trend')->take(4)->get()->firstOrFail();

        return view('landing', [
            'euro' => $euro,
            'golden' => $golden,
            

        ]);
    }
}
