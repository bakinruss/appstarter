<?php

namespace App\Modules\Health\Entities;

final class HealthStatus
{
    public function __construct(
        public readonly string $status,
    ) {
    }
}
