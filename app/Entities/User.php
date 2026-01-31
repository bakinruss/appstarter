<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class User extends Entity
{
    // Сущность пользователя для работы с данными из БД
    protected $attributes = [
        'id' => null,
        'email' => null,
        'password_hash' => null,
        'name' => null,
        'role_id' => null,
        'status' => 1,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'integer',
        'role_id' => 'integer',
        'status' => 'integer',
    ];
}
