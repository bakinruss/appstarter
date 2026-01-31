<?php

namespace App\Modules\Users\DTO;

final class UserResponse
{
    public function __construct(
        public readonly int $id,
        public readonly string $email,
        public readonly string $name,
        public readonly string $role,
    ) {
    }
}
