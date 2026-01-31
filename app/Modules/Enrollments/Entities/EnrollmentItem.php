<?php

namespace App\Modules\Enrollments\Entities;

final class EnrollmentItem
{
    public function __construct(
        public readonly int $id,
        public readonly int $userId,
        public readonly int $courseId,
        public readonly string $roleInCourse,
    ) {
    }
}
