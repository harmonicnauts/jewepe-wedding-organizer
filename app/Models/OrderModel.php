<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model {
    protected $table = 'orders';
    protected $allowedFields = [
        'user_id',
        'package_id',
        'event_date',
        'status',
        'created_at',
        'updated_at',
        'visibility'
    ];
    protected $primaryKey = 'order_id';

    public function getOrder($id) {
        return $this->find($id);
    }
    public function getAllOrder() {
        $this->select('orders.*, users.email, packages.name');
        $this->join('users', 'users.user_id = orders.user_id');
        $this->join('packages', 'packages.package_id = orders.package_id');
        $data = $this->findAll();
        return $data;
    }
    public function updateOrder($id, $data) {
        return $this->where('order_id', $id)->set($data)->update();
    }

    public function getUserOrders($user_id) {
        $this->select('orders.*, users.email, packages.name');
        $this->join('users', 'users.user_id = orders.user_id');
        $this->join('packages', 'packages.package_id = orders.package_id');
        return $this->where('orders.user_id', $user_id)->where('orders.visibility !=', 0)->findAll();
    }

    public function getOrderById($order_id) {
        $this->select('orders.*, users.email, users.name AS user_name, packages.name AS package_name, packages.price');
        $this->join('users', 'users.user_id = orders.user_id');
        $this->join('packages', 'packages.package_id = orders.package_id');
        return $this->where('orders.order_id', $order_id)
            ->where('orders.visibility !=', 0)
            ->first();
    }



    // public function getOrdersByDateRange($startDate, $endDate) {
    //     return $this->where('created_at >=', $startDate)
    //         ->where('created_at <=', $endDate)
    //         ->findAll();
    // }
}
