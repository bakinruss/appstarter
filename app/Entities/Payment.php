<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class Payment extends Entity
{
    // Платёж (заглушка для будущей интеграции)
    protected $attributes = [
        'id' => null,
        'user_id' => null,
        'course_id' => null,
        'amount' => 0,
        'status' => 'pending',
        'created_at' => null,
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'amount' => 'integer',
    ];
}
