<?php

namespace App\Modules\Payments\Controllers;

use App\Controllers\BaseController;
use App\Modules\Payments\Services\PaymentsService;

final class PaymentsController extends BaseController
{
    private PaymentsService $service;

    public function __construct()
    {
        $this->service = new PaymentsService();
    }

    public function create()
    {
        $data = $this->request->getJSON(true) ?? $this->request->getPost();
        $courseId = (int) ($data['course_id'] ?? 0);
        $amount = (int) ($data['amount'] ?? 0);
        $userId = (int) session()->get('user_id');

        $payment = $this->service->create($userId, $courseId, $amount);
        return $this->response->setJSON(['payment' => $payment]);
    }
}
