<?php

namespace App\Models;

use App\Entities\CourseUser;
use CodeIgniter\Model;

final class CourseUserModel extends Model
{
    protected $table = 'course_users';
    protected $primaryKey = 'id';
    protected $returnType = CourseUser::class;
    protected $allowedFields = ['user_id', 'course_id', 'role_in_course'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'created_at';
}
