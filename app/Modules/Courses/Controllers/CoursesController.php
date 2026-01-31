<?php

namespace App\Modules\Courses\Controllers;

use App\Controllers\BaseController;
use App\Modules\Courses\Services\CourseService;

final class CoursesController extends BaseController
{
    private CourseService $service;

    public function __construct()
    {
        $this->service = new CourseService();
    }

    public function index()
    {
        return $this->response->setJSON(['items' => $this->service->list()]);
    }

    /**
     * Возвращает HTML-страницу со списком курсов (для публичного сайта).
     */
    public function page()
    {
        $items = $this->service->list();
        // Представление `public/courses` расширяет `layouts/public`, поэтому возвращаем его напрямую
        return view('public/courses', ['items' => $items]);
    }

    public function show(int $id)
    {
        $course = $this->service->find($id);
        if (!$course) {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Курс не найден']);
        }

        return $this->response->setJSON(['item' => $course]);
    }

    public function create()
    {
        $data = $this->request->getJSON(true) ?? $this->request->getPost();
        $title = (string) ($data['title'] ?? '');
        $description = (string) ($data['description'] ?? '');

        if ($title === '') {
            return $this->response->setStatusCode(422)->setJSON(['error' => 'Название обязательно']);
        }

        $id = $this->service->create($title, $description);
        return $this->response->setStatusCode(201)->setJSON(['id' => $id]);
    }

    public function update(int $id)
    {
        $data = $this->request->getJSON(true) ?? $this->request->getRawInput();
        $title = (string) ($data['title'] ?? '');
        $description = (string) ($data['description'] ?? '');
        $status = (string) ($data['status'] ?? 'draft');

        if ($title === '') {
            return $this->response->setStatusCode(422)->setJSON(['error' => 'Название обязательно']);
        }

        $ok = $this->service->update($id, $title, $description, $status);
        return $this->response->setJSON(['status' => $ok ? 'ok' : 'fail']);
    }

    public function lessons(int $id)
    {
        return $this->response->setJSON(['items' => $this->service->lessonsForCourse($id)]);
    }

    /**
     * HTML-страница с подробной информацией о курсе.
     */
    public function showPage(int $id)
    {
        $course = $this->service->find($id);
        if (! $course) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Курс не найден");
        }

        return view('public/course', ['item' => $course]);
    }
}
