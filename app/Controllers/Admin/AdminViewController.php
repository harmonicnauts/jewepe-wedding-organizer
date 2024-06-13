<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminViewController extends BaseController {

    public function dashboard() {
        return view('admin/dashboard');
    }
    public function users() {
        return view('admin/users');
    }
    public function catalogue() {
        return view('admin/catalogue');
    }
    public function orders() {
        return view('admin/orders');
    }
    public function profile() {
        return view('admin/profile');
    }
}
