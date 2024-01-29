<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                $token = $user->createToken('AppName')->accessToken;
                return response()->json(['token' => $token], 200);
            } else {
                Auth::logout();
                return response()->json(['error' => 'Anda Tidak Punya Akses'], 401);
            }
        }

        return response()->json(['error' => 'Anda Belum Daftar'], 401);
    }
}
