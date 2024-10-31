<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($this->authenticate($username, $password)) {
            return redirect()->to(base_url('superadmin/home'));
        } else {
            session()->setFlashdata('error', 'Username atau password salah.');
            return redirect()->back();
        }
    }

    private function authenticate($username, $password)
    {
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
} 