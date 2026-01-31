<?php

namespace App\Modules\Auth\Entities;

final class AuthSession
{
    public function __construct(
        public readonly int $userId,
        public readonly string $roleCode,
    ) {
    }
}
