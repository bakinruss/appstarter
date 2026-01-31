<?php

namespace App\Controllers;

final class AuthPageController extends BaseController
{
    public function login()
    {
        return view('auth/login', [
            'title' => 'Вход',
        ]);
    }
}
