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

    // Authenticate : Fix some lil bugs and we're good to go -> DONE
    public function authenticate() {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'user_id' => $user['user_id'],
                'email' => $user['email'],
                'name' => $user['name'],
                'role' => $user['role'],
                'isLoggedIn' => true,
            ];
            $session->set($sessionData);
            return redirect()->to(base_url('/admin/dashboard'));
        } else {
            $session->setFlashdata('error', 'Invalid email or password');
            return redirect()->to(base_url('/login'));
        }
    }

    // Store new user : DONE
    public function store() {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('auth/register', ['validation' => $validation]);
        } else {
            $userModel = new UserModel();

            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'role' => 'user',
            ];

            $userModel->save($data);

            return redirect()->to(base_url('/login'))->with('success', 'Registration successful. Please login.');
        }
    }

    // Logout : DONE
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'));
    }
}
