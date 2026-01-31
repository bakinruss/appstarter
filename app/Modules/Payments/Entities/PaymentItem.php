<?php

namespace App\Modules\Payments\Entities;

final class PaymentItem
{
    public function __construct(
        public readonly int $id,
        public readonly int $userId,
        public readonly int $courseId,
        public readonly int $amount,
        public readonly string $status,
    ) {
    }
}
