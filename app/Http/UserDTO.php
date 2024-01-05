<?php

namespace App\Http;

use App\Http\Requests\UserRequests;

class UserDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password
    )
    {
    }

    public
    static function create(UserRequests $requests): UserDTO
    {
        return new self(
            name: $requests->title,
            email : $requests->email,
            password: $requests->password
        );
    }
}
