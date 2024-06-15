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

    public function getUser($id) {
        return $this->find($id);
    }

    public function updateUser($id, $data) {
        return $this->where('user_id', $id)->set($data)->update();
    }

    public function deleteUser($id) {
        return $this->where('user_id', $id)->delete();
    }
}
