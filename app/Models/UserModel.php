<?php

namespace App\Models;

use App\Entities\User;
use CodeIgniter\Model;

final class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = User::class;
    protected $allowedFields = ['email', 'password_hash', 'name', 'role_id', 'status'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
