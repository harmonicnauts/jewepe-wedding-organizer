<?php

namespace App\Models;

use CodeIgniter\Model;

class WebProfileModel extends Model {
    protected $table = 'website_info';
    protected $primaryKey = 'prof_id';

    protected $allowedFields = [
        'prof_id',
        'hero_image_path',
        'description',
        'title',
        'description_image_path',
        'vision',
        'vision_image_path',
        'successful_marriage',
        'satisfied_customer',
        'guests',
        'catalogue_redir_image',
        'updated_at',
    ];
}
