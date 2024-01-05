<?php

namespace App\Http;

use App\Http\Requests\UserRequests;
use App\Models\User;

class UserService
{
    public function __construct(protected UserRepository $repository)
    {
    }

    public function createUser(UserDTO $userDTO)
    {
        return  $this->repository->create($userDTO);
    }
}
