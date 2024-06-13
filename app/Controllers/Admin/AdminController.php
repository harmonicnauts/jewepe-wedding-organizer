<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Controllers\BaseController;

class AdminController extends BaseController {

    protected $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function dashboard() {
        return view('admin/dashboard');
    }
    public function users() {
        $data['users'] = $this->userModel->getAllUser();
        return view('admin/users', $data);
    }
    public function addUser() {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'email' => 'required|max_length[30]',
            'name' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('admin/add_user', ['validation' => $validation]);
        } else {

            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password'),
                'role' => $this->request->getVar('role'),
            ];

            $this->userModel->addUser($data);

            return redirect()->to(base_url('/admin/adduser'));
        }
    }
    public function catalogue() {
        return view('admin/catalogue');
    }
    public function orders() {
        return view('admin/orders');
    }
    public function profile() {
        return view('admin/profile');
    }
}
