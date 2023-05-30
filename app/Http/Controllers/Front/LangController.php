<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;


class LangController extends Controller
{
    public function change($lang)
 
    {
        // dd($lang);
        // App::setLocale($lang);
 
        // session()->put('locale', $lang);
 
   
 
        // return redirect()->back();
         // App::setLocale($request->lang);
        //  app()->setlocale($lang);
        App::setLocale($lang);
         // dd($lang);
         session()->put('locale', $lang);
 
         return redirect()->route('front.index');
 
    }
}
