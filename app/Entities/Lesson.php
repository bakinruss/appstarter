<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class Lesson extends Entity
{
    // Сущность урока
    protected $attributes = [
        'id' => null,
        'course_id' => null,
        'title' => null,
        'content' => null,
        'sort_order' => 0,
        'is_free' => 0,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'sort_order' => 'integer',
        'is_free' => 'integer',
    ];
}
