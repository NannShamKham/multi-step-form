<?php

namespace App\Http\Controllers;

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
//        return $request;
//        return $this->authService->register($request);
        return new ApiSuccessResponse($this->authService->register());

    }

    public function login(UserRequest $request):ApiSuccessResponse
    {
//        return $request;
        return new ApiSuccessResponse($this->authService->login($request));
    }
}
