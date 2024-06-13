<?php

namespace App\Controllers;

use App\Models\OrderModel;
use App\Models\PackageModel;

class UserController extends BaseController {
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

    public function profile() {
        $orderModel = new OrderModel();
        $user_id = session()->get('user_id');
        $data['orders'] = $orderModel->where('user_id', $user_id)->findAll();

        return view('pages/profile', $data);
    }
}
