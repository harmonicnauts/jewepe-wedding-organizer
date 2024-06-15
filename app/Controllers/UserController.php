<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PackageModel;

class UserController extends BaseController {

    protected $packageModel;

    public function __construct() {
        $this->packageModel = new PackageModel();
        $this->orderModel = new OrderModel();
    }


    public function order($id = null) {
        $data['package'] = $this->packageModel->getPackage($id);

        return view('pages/order', $data);
    }

    public function saveOrder($id = null) {
        $data = [
            'user_id' => session()->get('user_id'),
            'package_id' => $id,
            'event_date' => $this->request->getPost('event_date'),
            'status' => 'request',
        ];

        $this->orderModel->insert($data);

        return redirect()->to(base_url('catalogue'));
    }


    public function booking() {
        $packageModel = new PackageModel();
        $data['packages'] = $packageModel->findAll();

        return view('pages/booking', $data);
    }

    public function bookPackage() {
        $orderModel = new OrderModel();
        $data = [
            'user_id' => session()->get('user_id'),
            'package_id' => $this->request->getPost('package_id'),
            'event_date' => $this->request->getPost('event_date'),
            'special_requests' => $this->request->getPost('special_requests'),
            'status' => 'request',
            'created_at' => date('Y-m-d H:i:s')
        ];

        $orderModel->save($data);

        // Send email to user (simplified example)
        $email = \Config\Services::email();
        $email->setTo(session()->get('user_email'));
        $email->setSubject('Order Confirmation');
        $email->setMessage('Your order has been placed successfully!');
        $email->send();

        return redirect()->to('user/profile');
    }
}
