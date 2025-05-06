<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'user_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = new User;

        $user->name = $request->user_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        Auth::login($user);

        return redirect('/backend/dashboard');

    }
}
