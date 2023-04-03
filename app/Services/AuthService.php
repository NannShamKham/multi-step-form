<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService
{

    public function register($request)
    {
//        return $request;
        $user = User::create([
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email,
            "role" => $request->role
        ]);
        return $user;
    }

    public function login($request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return "try again";
        }
        return Auth::user()->createToken('phone')->plainTextToken;
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
    }
}
