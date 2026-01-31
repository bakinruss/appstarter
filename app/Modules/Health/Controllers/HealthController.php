<?php

namespace App\Modules\Health\Controllers;

use App\Controllers\BaseController;
use App\Modules\Health\Services\HealthService;

final class HealthController extends BaseController
{
    private HealthService $service;

    public function __construct()
    {
        $this->service = new HealthService();
    }

    public function index()
    {
        return $this->response->setJSON($this->service->status());
    }
}
