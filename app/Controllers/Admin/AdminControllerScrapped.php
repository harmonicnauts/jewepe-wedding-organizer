<?php

namespace App\Controllers\Admin;

use App\Models\OrderModel;
use App\Models\PackageModel;
use App\Models\UserModel;

class AdminController extends BaseController {

    public function catalog() {
        $packageModel = new PackageModel();
        $data['packages'] = $packageModel->findAll();

        return view('pages/catalog', $data);
    }

    public function manageOrders() {
        $orderModel = new OrderModel();
        $data['orders'] = $orderModel->findAll();

        return view('pages/orders', $data);
    }

    public function manageUsers() {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();

        return view('pages/users', $data);
    }

    public function updateOrderStatus($id) {
        $orderModel = new OrderModel();
        $order = $orderModel->find($id);
        $order['status'] = 'approved';
        $orderModel->save($order);

        return redirect()->to('admin/manageOrders');
    }

    public function report() {
        return view('pages/report_form');
    }

    public function generateReport() {
        $startDate = $this->request->getPost('start_date');
        $endDate = $this->request->getPost('end_date');

        $orderModel = new OrderModel();
        $data['orders'] = $orderModel->getOrdersByDateRange($startDate, $endDate);

        return view('pages/report_result', $data);
    }
}
