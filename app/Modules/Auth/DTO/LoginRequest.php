<?php

namespace App\Modules\Auth\DTO;

final class LoginRequest
{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
    ) {
    }
}
