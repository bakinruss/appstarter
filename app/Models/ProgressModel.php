<?php

namespace App\Models;

use App\Entities\Progress;
use CodeIgniter\Model;

final class ProgressModel extends Model
{
    protected $table = 'progress';
    protected $primaryKey = 'id';
    protected $returnType = Progress::class;
    protected $allowedFields = ['user_id', 'lesson_id', 'progress_percent'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
