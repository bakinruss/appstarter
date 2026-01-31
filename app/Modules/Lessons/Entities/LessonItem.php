<?php

namespace App\Modules\Lessons\Entities;

final class LessonItem
{
    public function __construct(
        public readonly int $id,
        public readonly int $courseId,
        public readonly string $title,
        public readonly string $content,
        public readonly int $sortOrder,
        public readonly bool $isFree,
    ) {
    }
}
