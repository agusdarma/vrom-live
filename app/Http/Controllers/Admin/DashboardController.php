<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // $items = Item::with(['type', 'brand'])->get();
        // $items = Item::with(['type', 'brand']);

        // foreach ($items as $item) {
        //     echo $item->name;
        //     echo "<br>";
        //     echo $item->type->name;
        //     echo "<br>";
        //     echo $item->brand->name;
        //     echo "<br>";
        // }
        return view('admin.dashboard');
    }
}
