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
        $data['packages'] = $this->packageModel->findAll();

        return view('pages/booking', $data);
    }

    public function bookPackage() {
        $data = [
            'user_id' => session()->get('user_id'),
            'package_id' => $this->request->getPost('package_id'),
            'event_date' => $this->request->getPost('event_date'),
            'special_requests' => $this->request->getPost('special_requests'),
            'status' => 'request',
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->orderModel->save($data);

        // Send email to user (simplified example)
        $email = \Config\Services::email();
        $email->setTo(session()->get('user_email'));
        $email->setSubject('Order Confirmation');
        $email->setMessage('Your order has been placed successfully!');
        $email->send();

        return redirect()->to('user/profile');
    }

    public function history($id = null) {
        $data['orders']  = $this->orderModel->getUserOrders($id);
        return view('pages/history', $data);
    }

    public function historyDetail($orderId = null) {
        $data['order'] = $this->orderModel->getOrderById($orderId);
        return view('pages/history_detail', $data);
    }
}
