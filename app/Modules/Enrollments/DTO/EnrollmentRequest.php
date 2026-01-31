<?php

namespace App\Modules\Enrollments\DTO;

final class EnrollmentRequest
{
    public function __construct(
        public readonly int $userId,
        public readonly int $courseId,
        public readonly string $roleInCourse,
    ) {
    }
}
