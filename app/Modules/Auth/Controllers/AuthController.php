<?php

namespace App\Modules\Auth\Controllers;

use App\Controllers\BaseController;
use App\Modules\Auth\Services\AuthService;

final class AuthController extends BaseController
{
    private AuthService $service;

    public function __construct()
    {
        $this->service = new AuthService();
    }

    public function login()
    {
        $data = $this->request->getJSON(true) ?? $this->request->getPost();
        $email = (string) ($data['email'] ?? '');
        $password = (string) ($data['password'] ?? '');

        if ($email === '' || $password === '') {
            return $this->response->setStatusCode(422)->setJSON(['error' => 'Заполните email и пароль']);
        }

        $result = $this->service->login($email, $password);
        if (!$result) {
            return $this->response->setStatusCode(401)->setJSON(['error' => 'Неверные данные']);
        }

        return $this->response->setJSON(['user' => $result]);
    }

    public function register()
    {
        $data = $this->request->getJSON(true) ?? $this->request->getPost();
        $email = (string) ($data['email'] ?? '');
        $password = (string) ($data['password'] ?? '');
        $name = (string) ($data['name'] ?? '');

        if ($email === '' || $password === '' || $name === '') {
            return $this->response->setStatusCode(422)->setJSON(['error' => 'Заполните все поля']);
        }

        $result = $this->service->register($email, $password, $name);
        if (!$result) {
            return $this->response->setStatusCode(409)->setJSON(['error' => 'Пользователь уже существует']);
        }

        return $this->response->setStatusCode(201)->setJSON(['user' => $result]);
    }

    public function logout()
    {
        $this->service->logout();
        return $this->response->setJSON(['status' => 'ok']);
    }

    public function csrf()
    {
        return $this->response->setJSON([
            'token' => csrf_token(),
            'hash' => csrf_hash(),
        ]);
    }
}
