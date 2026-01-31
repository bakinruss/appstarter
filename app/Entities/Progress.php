<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class Progress extends Entity
{
    // Прогресс обучения по уроку
    protected $attributes = [
        'id' => null,
        'user_id' => null,
        'lesson_id' => null,
        'progress_percent' => 0,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'lesson_id' => 'integer',
        'progress_percent' => 'integer',
    ];
}
