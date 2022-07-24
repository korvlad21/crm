<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');   

        if(Auth::attempt($credentials))
        {
            return response(true);
        }

        return response(false, 301);
    }

    public function logout()
    {
        Auth::logout();

        return response(true);
    }
}
