<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;

class AuthService
{

    public function register($request)
    {
        return $request;
//        User::create([
//
//        ])
    }

    public function login($request)
    {
        return $request;
    }

    public function logout()
    {

    }
}
