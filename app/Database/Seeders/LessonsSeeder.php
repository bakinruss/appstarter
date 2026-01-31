<?php

namespace App\Database\Seeders;

use App\Models\CourseModel;
use App\Models\LessonModel;
use CodeIgniter\Database\Seeder;

final class LessonsSeeder extends Seeder
{
    public function run()
    {
        $courses = new CourseModel();
        $lessons = new LessonModel();

        $course = $courses->first();
        if (!$course) {
            return;
        }

        $lessons->insertBatch([
            [
                'course_id' => $course->id,
                'title' => 'Введение',
                'content' => 'Первый урок — заглушка.',
                'sort_order' => 1,
                'is_free' => 1,
            ],
            [
                'course_id' => $course->id,
                'title' => 'Основы',
                'content' => 'Второй урок — заглушка.',
                'sort_order' => 2,
                'is_free' => 0,
            ],
        ]);
    }
}
