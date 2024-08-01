<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserAuthFilter implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(base_url('/login'))->with('error', 'Access Denied, Please Login First!');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
    }
}
