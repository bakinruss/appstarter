<?php

namespace App\Database\Seeders;

use App\Models\RoleModel;
use CodeIgniter\Database\Seeder;

final class RolesSeeder extends Seeder
{
    public function run()
    {
        $roles = new RoleModel();

        $roles->insertBatch([
            ['code' => 'admin', 'title' => 'Администратор'],
            ['code' => 'teacher', 'title' => 'Преподаватель'],
            ['code' => 'student', 'title' => 'Студент'],
        ]);
    }
}
