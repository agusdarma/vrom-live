<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;

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

    public function update(ProfileRequest $request, User $user)
    {
        $data = $request->all();                
        $user->update($data);
        return redirect()->route('front.editProfile')->with('success', 'Profile berhasil diubah');
    }

}
