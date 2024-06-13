<?php

namespace App\Models;

use CodeIgniter\Model;

class PackageModel extends Model {
    protected $table = 'packages';
    protected $allowedFields = ['package_id', 'name', 'description', 'price', 'image', 'created_at', 'updated_at'];

    protected $primaryKey = 'package_id';

    public function getAllPackage() {
        return $this->findAll();
    }

    public function getPackage($id) {
        return $this->find($id);
    }

    public function addPackage($data) {
        return $this->insert($data);
    }
    public function updatePackage($id, $data) {
        return $this->where('package_id', $id)->set($data)->update();
    }

    public function deletePackage($id) {
        return $this->where('package_id', $id)->delete();
    }
}
