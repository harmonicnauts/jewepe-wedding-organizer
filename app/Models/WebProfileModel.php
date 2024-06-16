<?php

namespace App\Models;

use CodeIgniter\Model;

class WebProfileModel extends Model {
    protected $table = 'website_info';
    protected $primaryKey = 'prof_id';
    protected $allowedFields = [
        'prof_id',
        'description',
        'vision',
        'successful_marriage',
        'satisfied_customer',
        'guests',
    ];

    public function updateProfile($data, $id) {
        return $this->where('prof_id', $id)->set($data)->update();
    }
}
