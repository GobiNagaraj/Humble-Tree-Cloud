<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        if( Auth::attempt(['email' => $email, 'password' => $password]) ) {
            $user = User::where('email', $email)->first();
            Auth::login($user);

            return redirect('/backend/dashboard');
        } else {
            return back()->withErrors('Invalid Credentials!!');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect('/backend/login');
    }
}
