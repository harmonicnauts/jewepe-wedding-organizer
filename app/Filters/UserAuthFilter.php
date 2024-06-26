<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class UserAuthFilter implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to(base_url('/login'));
        }

        if ($session->get('role') !== 'user') {
            return redirect()->to(base_url('/login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {
    }
}
