<?php

namespace App\Modules\Lessons\DTO;

final class LessonCreateRequest
{
    public function __construct(
        public readonly int $courseId,
        public readonly string $title,
        public readonly string $content,
    ) {
    }
}
