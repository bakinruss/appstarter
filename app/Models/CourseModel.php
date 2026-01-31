<?php

namespace App\Models;

use App\Entities\Course;
use CodeIgniter\Model;

final class CourseModel extends Model
{
    protected $table = 'courses';
    protected $primaryKey = 'id';
    protected $returnType = Course::class;
    protected $allowedFields = ['title', 'description', 'status'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
