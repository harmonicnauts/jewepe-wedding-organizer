<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model {
    protected $table = 'packages';
    protected $allowedFields = ['package_id', 'name', 'description', 'price', 'image', 'created_at', 'updated_at'];

    protected $primaryKey = 'package_id';

    public function addPackage($data) {
        return $this->insert($data);
    }
    public function getAllPackage() {
        return $this->findAll();
    }
}
