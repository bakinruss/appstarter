<?php

namespace App\Modules\Courses\Entities;

final class CourseItem
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $description,
        public readonly string $status,
    ) {
    }
}
