<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $require){
        $credential = $require->only('email', 'password');
            if (!Auth::attempt($credential)){
                return response([
                    'message' => 'usuario y/o contraseña invalido.'
                ], 401);
            }
            $accessToken = Auth::user()->createToken('authTestToken')->accessToken;
            return response([
                'user' => Auth::user(),
                'accessToken' => $accessToken
            ]);
    }
}
