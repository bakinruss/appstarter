<?php

namespace App\Database\Seeders;

use App\Models\RoleModel;
use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

final class AdminSeeder extends Seeder
{
    public function run()
    {
        $email = env('SEED_ADMIN_EMAIL', 'admin@example.com');
        $password = env('SEED_ADMIN_PASSWORD', 'Admin123!');
        $name = env('SEED_ADMIN_NAME', 'Администратор');

        $roles = new RoleModel();
        $users = new UserModel();

        $adminRole = $roles->where('code', 'admin')->first();
        if (!$adminRole) {
            return;
        }

        if ($users->where('email', $email)->first()) {
            return;
        }

        $users->insert([
            'email' => $email,
            'password_hash' => password_hash($password, PASSWORD_DEFAULT),
            'name' => $name,
            'role_id' => $adminRole->id,
            'status' => 1,
        ]);
    }
}
