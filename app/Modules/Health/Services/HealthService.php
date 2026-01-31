<?php

namespace App\Modules\Health\Services;

final class HealthService
{
    public function status(): array
    {
        return [
            'status' => 'ok',
            'timestamp' => date('c'),
        ];
    }
}
