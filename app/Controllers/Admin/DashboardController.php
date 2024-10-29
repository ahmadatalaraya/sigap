<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard - SIGAP'
        ];

        return view('admin/dashboard/index', $data);
    }
}
