<?php

namespace App\Modules\Lessons\Services;

use App\Models\LessonModel;

final class LessonService
{
    public function __construct(
        private readonly LessonModel $lessons = new LessonModel(),
    ) {
    }

    public function find(int $id): ?object
    {
        return $this->lessons->find($id);
    }
}
