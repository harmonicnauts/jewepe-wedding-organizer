<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController {
    public function __construct() {
        $this->userModel = new UserModel();
        $this->validation = \Config\Services::validation();
    }
    public function login() {
        return view('auth/login', ['validation' => $this->validation]);
    }

    public function register() {
        return view('auth/register', ['validation' => $this->validation]);
    }

    // Authenticate : Fix some lil bugs and we're good to go -> DONE
    public function authenticate() {
        $session = session();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user =  $this->userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $sessionData = [
                'user_id' => $user['user_id'],
                'email' => $user['email'],
                'name' => $user['name'],
                'role' => $user['role'],
                'isLoggedIn' => true,
            ];
            $session->set($sessionData);

            if ($user['role'] == 'admin') {
                return redirect()->to(base_url('/admin/dashboard'))->with('success', 'Logged in!');
            }
            return redirect()->to(base_url('/'))->with('success', 'Logged in!');
        } else {
            return redirect()->to(base_url('/login'))->with('error', 'Invalid email or password');
        }
    }

    // Store new user : DONE
    public function store() {
        $validationRules = [
            'email' => 'required|valid_email',
            'name' => 'required',
            'password' => 'required|min_length[6]'
        ];
        $this->setupValidationRules($validationRules);

        if (!$this->validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', 'Invalid Input');
            return view('auth/register', ['validation' => $this->validation]);
        } else {
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'role' => 'user',
            ];

            $this->userModel->addUser($data);

            return redirect()->to(base_url('/login'))->with('success', 'User added successfully');
        }
    }


    // Logout : DONE
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/login'))->with('success', 'Logged out!');
    }

    private function setupValidationRules($rules) {
        $this->validation->setRules($rules);
    }
}
