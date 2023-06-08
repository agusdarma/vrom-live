<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // dd($userLogin);
        return view('my-profile', [
            'user' => $user,
        ]);
    }

}
