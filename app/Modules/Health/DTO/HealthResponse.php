<?php

namespace App\Modules\Health\DTO;

final class HealthResponse
{
    public function __construct(
        public readonly string $status,
        public readonly string $timestamp,
    ) {
    }
}
