<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController {
    public function login() {
        return view('auth/login');
    }

    public function register() {
        return view('auth/register');
    }

    // Authenticate : Fix some lil bugs and we're good to go
    public function authenticate() {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'user_id' => $user['id'],
                'user_name' => $user['name'],
                'user_role' => $user['role'],
                'is_logged_in' => true,
            ]);

            if ($user['role'] === 'admin') {
                return redirect()->to('admin/dashboard');
            } else {
                return redirect()->to('/');
            }
        } else {
            return redirect()->to('login')->with('error', 'Invalid login credentials');
        }
    }

    // Logout : DONE
    public function logout() {
        session()->destroy();
        return redirect()->to('/');
    }
}
