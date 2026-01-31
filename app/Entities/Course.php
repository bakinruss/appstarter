<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class Course extends Entity
{
    // Сущность курса
    protected $attributes = [
        'id' => null,
        'title' => null,
        'description' => null,
        'status' => 'draft',
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}
