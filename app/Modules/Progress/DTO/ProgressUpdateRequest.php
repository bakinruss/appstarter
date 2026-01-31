<?php

namespace App\Modules\Progress\DTO;

final class ProgressUpdateRequest
{
    public function __construct(
        public readonly int $lessonId,
        public readonly int $progressPercent,
    ) {
    }
}
