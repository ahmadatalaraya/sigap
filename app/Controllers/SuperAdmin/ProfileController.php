<?php

namespace App\Controllers\SuperAdmin;
use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Profile - SIGAP SuperAdmin'
        ];

        return view('superadmin/profile/index', $data);
    }
} 