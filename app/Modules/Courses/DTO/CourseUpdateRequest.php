<?php

namespace App\Modules\Courses\DTO;

final class CourseUpdateRequest
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $status,
    ) {
    }
}
