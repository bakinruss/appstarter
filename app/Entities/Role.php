<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class Role extends Entity
{
    // Роль пользователя (admin/teacher/student)
    protected $attributes = [
        'id' => null,
        'code' => null,
        'title' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
