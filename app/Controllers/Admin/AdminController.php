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
        return view('admin/add_user', ['validation' => $this->validation]);
    }
    public function addUserAction() {
        $this->setupValidationRules(['email' => 'required|valid_email', 'name' => 'required', 'password' => 'required', 'role' => 'required']);
        if (!$this->validation->withRequest($this->request)->run()) {
            return view('admin/add_user', ['validation' => $this->validation]);
        } else {
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => $this->request->getVar('role'),
            ];
            $this->userModel->addUser($data);
            return redirect()->to(base_url('/admin/users'));
        }
    }

    public function updateUserPage($id = null) {
        $user = $this->userModel->getUser($id);
        return view('admin/update_user', ['user' => $user, 'validation' => $this->validation]);
    }

    public function updateUserAction($id = null) {
        $this->setupValidationRules(['email' => 'required|valid_email', 'name' => 'required', 'role' => 'required']);

        if (!$this->validation->withRequest($this->request)->run()) {
            $user = $this->userModel->getUser($id);
            return view('admin/update_user', ['validation' => $this->validation, 'user' => $user]);
        }
        $data =  [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'role' => $this->request->getVar('role'),
        ];

        if ($this->request->getVar('password')) {
            $data['password'] = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        }

        $this->userModel->updateUser($id, $data);

        return redirect()->to(base_url('/admin/users'));
    }

    public function deleteUserAction($id = null) {
        $user = $this->userModel->find($id);
        if ($user) {
            $this->userModel->delete($id);
            return redirect()->to(base_url('/admin/users'))->with('success', 'User deleted successfully');
        }

        return redirect()->to(base_url('/admin/users'))->with('error', 'User not found');
    }

    // Manage Catalogue
    public function packages() {
        $data['packages'] = $this->packageModel->getAllPackage();
        return view('admin/packages', $data);
    }

    public function addPackagePage() {
        return view('admin/add_package');
    }

    public function addPackageAction() {
        $this->setupValidationRules(['name' => 'required', 'price' => 'required|numeric']);

        if (!$this->validation->withRequest($this->request)->run()) {
            return view('admin/add_package', ['validation' => $this->validation]);
        } else {
            $package_img = $this->request->getFile('image');

            if ($package_img && $package_img->isValid() && !$package_img->hasMoved()) {
                $img_name = $package_img->getRandomName();
                $package_img->move(ROOTPATH . 'public/uploads/package', $img_name);
            } else {
                $img_name = '';
            }


            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'price' => $this->request->getVar('price'),
                'image' => $img_name,
            ];
            $this->packageModel->addPackage($data);

            return redirect()->to(base_url('/admin/packages'));
        }
    }

    public function updatePackagePage($id = null) {
        $data['package'] = $this->packageModel->getPackage($id);
        return view('admin/update_package', ['data' => $data, 'validation' => $this->validation]);
    }

    public function updatePackageAction($id = null) {
        $this->setupValidationRules(['name' => 'required', 'price' => 'required|numeric']);

        $data['package'] = $this->packageModel->getPackage($id);

        if (!$this->validation->withRequest($this->request)->run()) {
            return view('admin/update_package', ['data' => $data, 'validation' => $this->validation]);
        } else {
            $package_img = $this->request->getFile('image');

            if ($package_img && $package_img->isValid() && !$package_img->hasMoved()) {
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
                    'price' => $this->request->getVar('price'),
                    'image' => $data['package']['image']
                ];
            }
            $this->packageModel->updatePackage($id, $data);

            return redirect()->to(base_url('/admin/packages'));
        }
    }

    public function deletePackageAction($id = null) {
        $data = $this->packageModel->getPackage($id);

        if ($data) {
            $this->packageModel->deletePackage($id);

            $imagePath = ROOTPATH . 'public/uploads/package/' . $data['image'];
            if (is_file($imagePath) && $data['image'] !== '') {
                unlink($imagePath);
            }
        }
        return redirect()->to(base_url('/admin/packages'));
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
        } else {
            echo "No data found.";
        }
        return view('admin/web_profile', $data);
    }

    public function updateProfInfo() {
        $data = [
            'description'         => $this->request->getVar('description'),
            'vision'              => $this->request->getVar('vision'),
            'successful_marriage' => $this->request->getVar('successful_marriage'),
            'satisfied_customer'  => $this->request->getVar('satisfied_customer'),
            'guests'              => $this->request->getVar('guests')
        ];

        $this->webProfileModel->updateProfile($data, 1);
        return redirect()->to(base_url('/admin/profile'))->with('status', 'Profile updated successfully');
    }

    public function report() {
        // Get all packages
        $packages = $this->packageModel->findAll();

        // Get the count of each package_id in orders table
        $quantities = $this->orderModel->select('package_id, COUNT(package_id) as quantity')
            ->groupBy('package_id')
            ->findAll();

        // Prepare the quantity array
        $packageQuantities = [];
        foreach ($quantities as $quantity) {
            $packageQuantities[$quantity['package_id']] = $quantity['quantity'];
        }

        // Pass data to the view
        $data = [
            'packages' => $packages,
            'packageQuantities' => $packageQuantities
        ];

        return view('admin/report', $data);
    }


    // Helper method for setting validation rules
    private function setupValidationRules($rules) {
        $this->validation->setRules($rules);
    }
}
