<?php

namespace App\Modules\Lessons\Controllers;

use App\Controllers\BaseController;
use App\Modules\Lessons\Services\LessonService;

final class LessonsController extends BaseController
{
    private LessonService $service;

    public function __construct()
    {
        $this->service = new LessonService();
    }

    public function show(int $id)
    {
        $lesson = $this->service->find($id);
        if (!$lesson) {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Урок не найден']);
        }

        return $this->response->setJSON(['item' => $lesson]);
    }
}
