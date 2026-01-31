<?php

namespace App\Models;

use App\Entities\Payment;
use CodeIgniter\Model;

final class PaymentModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $returnType = Payment::class;
    protected $allowedFields = ['user_id', 'course_id', 'amount', 'status'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
