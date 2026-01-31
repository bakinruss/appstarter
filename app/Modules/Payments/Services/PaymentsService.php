<?php

namespace App\Modules\Payments\Services;

final class PaymentsService
{
    // Заглушка для сервиса платежей
    public function create(int $userId, int $courseId, int $amount): array
    {
        return [
            'id' => 1,
            'status' => 'pending',
        ];
    }
}
