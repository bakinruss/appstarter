<?php

namespace App\Modules\Courses\Services;

use App\Models\CourseModel;
use App\Models\LessonModel;

final class CourseService
{
    public function __construct(
        private readonly CourseModel $courses = new CourseModel(),
        private readonly LessonModel $lessons = new LessonModel(),
    ) {
    }

    public function list(): array
    {
        return $this->courses->orderBy('id', 'desc')->findAll();
    }

    public function find(int $id): ?object
    {
        return $this->courses->find($id);
    }

    public function create(string $title, string $description): int
    {
        return (int) $this->courses->insert([
            'title' => $title,
            'description' => $description,
            'status' => 'draft',
        ], true);
    }

    public function update(int $id, string $title, string $description, string $status): bool
    {
        return (bool) $this->courses->update($id, [
            'title' => $title,
            'description' => $description,
            'status' => $status,
        ]);
    }

    public function lessonsForCourse(int $courseId): array
    {
        return $this->lessons->where('course_id', $courseId)->orderBy('sort_order', 'asc')->findAll();
    }
}
