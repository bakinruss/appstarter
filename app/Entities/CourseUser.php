<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

final class CourseUser extends Entity
{
    // Связь пользователя и курса
    protected $attributes = [
        'id' => null,
        'user_id' => null,
        'course_id' => null,
        'role_in_course' => null,
        'created_at' => null,
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
    ];
}
