<?php

namespace App\Controllers;

use App\Models\PackageModel;

class Pages extends BaseController {
    public function home() {
        return view('pages/home');
    }

    public function about() {
        return view('pages/about');
    }

    public function catalogue() {
        $packageModel = new PackageModel();
        $data['packages'] = $packageModel->findAll();

        return view('pages/catalogue', $data);
    }
}
