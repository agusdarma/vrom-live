<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class GoldenTrendController extends Controller
{
    public function index($slug)
    {
        $controllerName = Route::currentRouteAction(); // string
        // $items = Item::with(['type', 'brand'])->latest()->take(4)->get()->reverse();
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

        return view('golden-trend', [
            'item' => $item,
            'price1Month' => $price1Month,
            'price3Month' => $price3Month,
            'price6Month' => $price6Month,
            'price12Month' => $price12Month
        ]);
    }
}
