<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;

class UserService
{
    public function __construct()
    {
    }

    public function create(){
        User::create([

        ]);
    }
}
