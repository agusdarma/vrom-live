<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EuroSwingMasterController extends Controller
{
    public function index($slug)
    {
        // $items = Item::with(['type', 'brand'])->latest()->take(4)->get()->reverse();
        $item = Item::with(['type', 'brand'])->whereSlug($slug)->firstOrFail();

        return view('euro-swing-master', [
            'item' => $item
        ]);
    }
}
