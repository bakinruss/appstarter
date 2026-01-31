<?php

namespace App\Models;

use App\Entities\Lesson;
use CodeIgniter\Model;

final class LessonModel extends Model
{
    protected $table = 'lessons';
    protected $primaryKey = 'id';
    protected $returnType = Lesson::class;
    protected $allowedFields = ['course_id', 'title', 'content', 'sort_order', 'is_free'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
