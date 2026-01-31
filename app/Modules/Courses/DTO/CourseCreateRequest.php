<?php

namespace App\Modules\Courses\DTO;

final class CourseCreateRequest
{
    public function __construct(
        public readonly string $title,
        public readonly string $description,
    ) {
    }
}
