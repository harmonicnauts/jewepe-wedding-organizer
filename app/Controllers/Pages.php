<?php

namespace App\Controllers;

use App\Models\WebProfileModel;
use App\Models\PackageModel;

class Pages extends BaseController {
    public function home() {
        $webProfileModel = new WebProfileModel();
        $profileData = $webProfileModel->first();

        if ($profileData) {
            $data = [
                'successful_marriage' => $profileData['successful_marriage'],
                'satisfied_customer' => $profileData['satisfied_customer'],
                'guests' => $profileData['guests'],
                'description' => $profileData['description'],
                'vision' => $profileData['vision'],
            ];

            return view('pages/home', $data);
        } else {
            echo "No data found.";
        }
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
