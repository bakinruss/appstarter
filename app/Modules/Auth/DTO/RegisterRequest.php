<?php

namespace App\Modules\Auth\DTO;

final class RegisterRequest
{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
        public readonly string $name,
    ) {
    }
}
