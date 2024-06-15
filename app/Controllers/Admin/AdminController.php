<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Models\PackageModel;
use App\Controllers\BaseController;
use App\Models\OrderModel;
use App\Models\WebProfileModel;

class AdminController extends BaseController {
    protected $userModel;
    protected $packageModel;
    protected $orderModel;
    protected $webProfileModel;
    protected $validation;

    // Constructor
    public function __construct() {
        $this->userModel = new UserModel();
        $this->packageModel = new PackageModel();
        $this->orderModel = new OrderModel();
        $this->webProfileModel = new WebProfileModel();
        $this->validation = \Config\Services::validation();
    }

    // Dashboard
    public function dashboard() {
        $data = [
            'packageCount' => $this->packageModel->countAllResults(),
            'orderCount' => $this->orderModel->countAllResults(),
            'userCount' => $this->userModel->countAllResults()
        ];
        return view('admin/dashboard', $data);
    }

    // Manage User
    public function users() {
        $data['users'] = $this->userModel->getAllUser();
        return view('admin/users', $data);
    }

    public function addUserPage() {
        $this->setupValidationRules(['email' => 'required|valid_email', 'name' => 'required', 'password' => 'required', 'role' => 'required']);
        return view('admin/add_user', ['validation' => $this->validation]);
    }

    public function addUser() {
        $this->setupValidationRules(['email' => 'required|valid_email', 'name' => 'required', 'password' => 'required', 'role' => 'required']);

        if (!$this->validation->withRequest($this->request)->run()) {
            return view('admin/add_user', ['validation' => $this->validation]);
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

    public function updateUserPage($id = null) {
        $this->setupValidationRules(['email' => 'required|valid_email', 'name' => 'required', 'password' => 'required', 'role' => 'required']);
        $user = $this->userModel->find($id);
        if (!$user) {
            return redirect()->to(base_url('/admin/users'))->with('error', 'User not found');
        }

        return view('admin/update_user', ['user' => $user, 'validation' => $this->validation]);
    }

    public function updateUser($id = null) {
        $this->setupValidationRules(['email' => 'required|valid_email', 'name' => 'required', 'role' => 'required']);

        $user = $this->userModel->find($id);
        if (!$user) {
            return redirect()->to(base_url('/admin/users'))->with('error', 'User not found');
        }

        if ($this->request->getMethod() === 'post' && $this->validation->withRequest($this->request)->run()) {
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'role' => $this->request->getVar('role'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $this->userModel->updateUser($id, $data);

            return redirect()->to(base_url('/admin/users'))->with('success', 'User updated successfully');
        }

        return view('admin/update_user', ['user' => $user, 'validation' => $this->validation]);
    }

    public function deleteUser($id = null) {
        $user = $this->userModel->find($id);
        if ($user) {
            $this->userModel->delete($id);
            return redirect()->to(base_url('/admin/users'))->with('success', 'User deleted successfully');
        }

        return redirect()->to(base_url('/admin/users'))->with('error', 'User not found');
    }

    // Manage Catalogue
    public function catalogue() {
        $data['packages'] = $this->packageModel->getAllPackage();
        return view('admin/catalogue', $data);
    }

    public function addPackagePage() {
        return view('admin/add_package');
    }

    public function addPackage() {
        $this->setupValidationRules(['name' => 'required', 'price' => 'required|numeric']);

        if (!$this->validation->withRequest($this->request)->run()) {
            return view('admin/add_package', ['validation' => $this->validation]);
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

    public function updatePackagePage($id = null) {
        $data['package'] = $this->packageModel->getPackage($id);
        return view('admin/update_package', ['data' => $data, 'validation' => $this->validation]);
    }

    public function updatePackage($id = null) {
        $this->setupValidationRules(['name' => 'required', 'price' => 'required|numeric']);

        $data['package'] = $this->packageModel->getPackage($id);

        if (!$this->validation->withRequest($this->request)->run()) {
            return view('admin/update_package', ['data' => $data, 'validation' => $this->validation]);
        } else {
            $package_img = $this->request->getFile('image');

            if ($package_img->isValid() && !$package_img->hasMoved()) {
                $prev_image = $data['package']['image'];
                $newName = $package_img->getRandomName();

                if ($prev_image && file_exists(ROOTPATH . 'public/uploads/package/' . $prev_image)) {
                    unlink(ROOTPATH . 'public/uploads/package/' . $prev_image);
                }
                $package_img->move(ROOTPATH . 'public/uploads/package', $newName);
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
        $data['orders'] = $this->orderModel->getAllOrder();
        return view('admin/orders', $data);
    }

    public function changeOrderStatus($orderId) {
        if ($this->request->getMethod(true) === 'PUT') {
            $order = $this->orderModel->getOrder($orderId);
            if ($order) {
                $newStatus = ($order['status'] == 'approved') ? 'request' : 'approved';

                $this->orderModel->update($orderId, ['status' => $newStatus]);
            }
        }

        return redirect()->to('/admin/orders');
    }

    public function deleteOrder($orderId) {
        if ($this->request->getMethod(true) === 'PUT') {
            $order = $this->orderModel->getOrder($orderId);
            if ($order) {
                $newVis = ($order['visibility'] == 1) ? 0 : 1;

                $this->orderModel->update($orderId, ['visibility' => $newVis]);
            }
        }

        return redirect()->to('/admin/orders');
    }

    // Manage Profile
    public function profile() {
        $profileData = $this->webProfileModel->first();

        if ($profileData) {
            $data = [
                'successful_marriage' => $profileData['successful_marriage'],
                'satisfied_customer' => $profileData['satisfied_customer'],
                'guests' => $profileData['guests'],
                'description' => $profileData['description'],
                'vision' => $profileData['vision'],
            ];

            return view('admin/web_profile', $data);
        } else {
            echo "No data found.";
        }
    }

    // Helper method for setting validation rules
    private function setupValidationRules($rules) {
        $this->validation->setRules($rules);
    }
}
