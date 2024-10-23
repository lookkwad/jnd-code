<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_check(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $attribute = [
            'email' => 'Email',
            'password' => 'Password',
        ];

        $request->validate($rules, [], $attribute);

        $data_login = $request->only("email", "password");
        if (Auth::attempt($data_login)) {
            echo 'success';
        } else {
            echo 'error';
        }
    } 

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
