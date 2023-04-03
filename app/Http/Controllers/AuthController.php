<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRequest;
use App\Http\Responses\ApiSuccessResponse;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(private AuthService $authService)
    {
    }

    public function register(UserRequest $request)
    {
        return new ApiSuccessResponse($this->authService->register($request));
    }

    public function login(UserLoginRequest $request):ApiSuccessResponse
    {
        return new ApiSuccessResponse($this->authService->login($request));
    }

    public function logout(){
        return new ApiSuccessResponse($this->authService->logout());
    }
}
