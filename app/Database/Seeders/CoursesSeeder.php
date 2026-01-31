<?php

namespace App\Database\Seeders;

use App\Models\CourseModel;
use CodeIgniter\Database\Seeder;

final class CoursesSeeder extends Seeder
{
    public function run()
    {
        $courses = new CourseModel();

        $courses->insert([
            'title' => 'Тестовый курс',
            'description' => 'Курс-заглушка для проверки структуры.',
            'status' => 'published',
        ]);
    }
}
