<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Models\PackageModel;
use App\Controllers\BaseController;

class AdminController extends BaseController {
    protected $userModel;
    protected $packageModel;

    //Constructor
    public function __construct() {
        $this->userModel = new UserModel();
        $this->packageModel = new PackageModel();
    }

    // Dashboard
    public function dashboard() {
        return view('admin/dashboard');
    }

    // Manage User
    public function users() {
        $data['users'] = $this->userModel->getAllUser();
        return view('admin/users', $data);
    }
    public function addUser() {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'email' => 'required|valid_email',
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

    // Manage Catalogue
    public function catalogue() {
        $data['packages'] = $this->packageModel->getAllPackage();
        return view('admin/catalogue', $data);
    }

    public function addPackage() {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'price' => 'required|numeric',
            // 'image' => 'max_size[image, 5120]|is_image[image]|mime_in[image/jpg,image/jpeg,image/png]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('admin/add_package', ['validation' => $validation]);
        } else {
            $package_img = $this->request->getFile('image');
            $img_name = $package_img->getRandomName();
            $package_img->move(ROOTPATH . 'public/uploads/package', $img_name);

            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'price' => $this->request->getVar('price'),
                'image' => $img_name,
            ];
            $this->packageModel->addPackage($data);

            return redirect()->to(base_url('/admin/catalogue'));
        }
    }

    public function updatePackage($id = null) {
        helper(['form', 'url']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'price' => 'required|numeric',
            // 'image' => 'max_size[image, 5120]|is_image[image]|mime_in[image/jpg,image/jpeg,image/png]',
        ]);

        $data['package'] = $this->packageModel->getPackage($id);

        if (!$validation->withRequest($this->request)->run()) {
            return view('admin/update_package', ['data' => $data, 'validation' => $validation]);
        } else {
            $package_img = $this->request->getFile('image');

            if ($package_img->isValid() && !$package_img->hasMoved()) {
                $prev_image = $data['package']['image'];
                $newName = $package_img->getRandomName();

                if ($prev_image && file_exists(base_url('uploads/package/') . $prev_image)) {
                    unlink(ROOTPATH . 'public/uploads/package/' . $prev_image);
                }
                $package_img->move(base_url('uploads/package'),  $newName);
                $data = [
                    'name' => $this->request->getVar('name'),
                    'description' => $this->request->getVar('description'),
                    'price' => $this->request->getVar('price'),
                    'image' => $newName,
                ];
            } else {
                $data = [
                    'name' => $this->request->getVar('name'),
                    'description' => $this->request->getVar('description'),
                    'price' => $this->request->getVar('price')
                ];
            }
            $this->packageModel->updatePackage($id, $data);

            return redirect()->to(base_url('/admin/catalogue'));
        }
    }

    public function deletePackage($id = null) {
        $data = $this->packageModel->getPackage($id);

        if ($data) {
            $this->packageModel->deletePackage($id);

            $imagePath = ROOTPATH . 'public/uploads/package/' . $data['image'];

            if (is_file($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->to(base_url('/admin/catalogue'));
    }

    // Manage Orders
    public function orders() {
        return view('admin/orders');
    }
    // Manage Profile
    public function profile() {
        return view('admin/profile');
    }
}
