<?php

namespace App\Modules\Progress\Entities;

final class ProgressItem
{
    public function __construct(
        public readonly int $id,
        public readonly int $userId,
        public readonly int $lessonId,
        public readonly int $progressPercent,
    ) {
    }
}
