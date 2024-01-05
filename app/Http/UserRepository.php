<?php

namespace App\Http;

use App\Models\User;

class UserRepository implements UsersInterface
{

    public function create($userDTO): User
    {
        $user = new User();
        $user->name = $userDTO->name;
        $user->email = $userDTO->email;
        $user->password = $userDTO->password;
        $user->save();
        return $user;
    }
}
