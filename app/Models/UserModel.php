<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $allowedFields = ['user_id', 'name', 'email', 'password', 'role'];

    public function addUser($data) {
        return $this->insert($data);
    }
    public function getAllUser() {
        return $this->findAll();
    }
}
