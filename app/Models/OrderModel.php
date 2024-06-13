<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model {
    protected $table = 'orders';
    protected $allowedFields = [
        'user_id', 'package_id', 'event_date', 'special_requests',
        'status', 'created_at'
    ];

    // public function getOrdersByDateRange($startDate, $endDate) {
    //     return $this->where('created_at >=', $startDate)
    //         ->where('created_at <=', $endDate)
    //         ->findAll();
    // }
}
