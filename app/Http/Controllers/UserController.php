<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequests;
use App\Http\UserDTO;
use App\Http\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(UserRequests $request): \Illuminate\Http\JsonResponse
    {

        $user = $this->userService->createUser(UserDTO::create($request));

        return response()->json($user);
    }
}
