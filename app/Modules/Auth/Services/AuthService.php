<?php

namespace App\Modules\Auth\Services;

use App\Models\RoleModel;
use App\Models\UserModel;

final class AuthService
{
    public function __construct(
        private readonly UserModel $users = new UserModel(),
        private readonly RoleModel $roles = new RoleModel(),
    ) {
    }

    public function login(string $email, string $password): ?array
    {
        $user = $this->users->where('email', $email)->first();
        if (!$user) {
            return null;
        }

        if (!password_verify($password, $user->password_hash)) {
            return null;
        }

        $role = $this->roles->find($user->role_id);
        $roleCode = $role?->code ?? 'student';

        // Сессионная авторизация (при необходимости легко заменить на JWT)
        session()->set([
            'user_id' => $user->id,
            'role_code' => $roleCode,
        ]);

        return [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'role' => $roleCode,
        ];
    }

    public function register(string $email, string $password, string $name): ?array
    {
        if ($this->users->where('email', $email)->first()) {
            return null;
        }

        $studentRole = $this->roles->where('code', 'student')->first();
        $roleId = $studentRole?->id ?? 3;

        $userId = $this->users->insert([
            'email' => $email,
            'password_hash' => password_hash($password, PASSWORD_DEFAULT),
            'name' => $name,
            'role_id' => $roleId,
            'status' => 1,
        ], true);

        return [
            'id' => $userId,
            'email' => $email,
            'name' => $name,
            'role' => 'student',
        ];
    }

    public function logout(): void
    {
        session()->remove(['user_id', 'role_code']);
    }
}
