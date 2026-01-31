<?php

namespace App\Database\Seeders;

use CodeIgniter\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('App\Database\Seeders\RolesSeeder');
        $this->call('App\Database\Seeders\AdminSeeder');
        $this->call('App\Database\Seeders\CoursesSeeder');
        $this->call('App\Database\Seeders\LessonsSeeder');
    }
}
