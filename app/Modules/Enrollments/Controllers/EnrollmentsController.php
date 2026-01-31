<?php

namespace App\Modules\Enrollments\Controllers;

use App\Controllers\BaseController;
use App\Modules\Enrollments\Services\EnrollmentsService;

final class EnrollmentsController extends BaseController
{
    private EnrollmentsService $service;

    public function __construct()
    {
        $this->service = new EnrollmentsService();
    }

    public function index()
    {
        return $this->response->setJSON(['items' => $this->service->list()]);
    }
}
