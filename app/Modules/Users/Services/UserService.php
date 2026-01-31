<?php

namespace App\Modules\Users\Services;

use App\Models\RoleModel;
use App\Models\UserModel;

final class UserService
{
    public function __construct(
        private readonly UserModel $users = new UserModel(),
        private readonly RoleModel $roles = new RoleModel(),
    ) {
    }

    public function currentUser(): ?array
    {
        $userId = (int) session()->get('user_id');
        if ($userId === 0) {
            return null;
        }

        $user = $this->users->find($userId);
        if (!$user) {
            return null;
        }

        $role = $this->roles->find($user->role_id);

        return [
            'id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'role' => $role?->code ?? 'student',
        ];
    }
}
