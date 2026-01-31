<?php

namespace App\Modules\VideoAccess\Controllers;

use App\Controllers\BaseController;
use App\Modules\VideoAccess\Services\VideoAccessService;

final class VideoAccessController extends BaseController
{
    private VideoAccessService $service;

    public function __construct()
    {
        $this->service = new VideoAccessService();
    }

    public function signedUrl()
    {
        $lessonId = (int) $this->request->getGet('lesson_id');
        $userId = (int) session()->get('user_id');

        if ($lessonId === 0) {
            return $this->response->setStatusCode(422)->setJSON(['error' => 'lesson_id обязателен']);
        }

        $payload = $this->service->signedUrlForLesson($lessonId, $userId);
        return $this->response->setJSON($payload);
    }
}
