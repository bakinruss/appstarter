<?php

namespace App\Modules\Users\Controllers;

use App\Controllers\BaseController;
use App\Modules\Users\Services\UserService;

final class UsersController extends BaseController
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function me()
    {
        $user = $this->service->currentUser();
        if (!$user) {
            return $this->response->setStatusCode(401)->setJSON(['error' => 'Требуется авторизация']);
        }

        return $this->response->setJSON(['user' => $user]);
    }
}
