<?php

namespace App\Modules\Progress\Controllers;

use App\Controllers\BaseController;
use App\Modules\Progress\Services\ProgressService;

final class ProgressController extends BaseController
{
    private ProgressService $service;

    public function __construct()
    {
        $this->service = new ProgressService();
    }

    public function update()
    {
        $data = $this->request->getJSON(true) ?? $this->request->getPost();
        $lessonId = (int) ($data['lesson_id'] ?? 0);
        $progress = (int) ($data['progress_percent'] ?? 0);
        $userId = (int) session()->get('user_id');

        $ok = $this->service->update($userId, $lessonId, $progress);
        return $this->response->setJSON(['status' => $ok ? 'ok' : 'fail']);
    }
}
