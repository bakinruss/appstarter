<?php

namespace App\Modules\Payments\DTO;

final class PaymentCreateRequest
{
    public function __construct(
        public readonly int $courseId,
        public readonly int $amount,
    ) {
    }
}
