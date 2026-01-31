<?php

namespace App\Models;

use App\Entities\Role;
use CodeIgniter\Model;

final class RoleModel extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $returnType = Role::class;
    protected $allowedFields = ['code', 'title'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
