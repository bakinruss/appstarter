<?php

namespace App\Modules\Admin\Controllers;

use App\Controllers\BaseController;

final class AdminController extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard', [
            'title' => 'Админка',
        ]);
    }
}
