<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (! session('isLoggedIn')) {
            $redir = redirect()->to('login');

            // Si NO está la cookie efímera, mostramos el warning.
            $suppress = $request->getCookie('suppressWarn') === '1';
            if (!$suppress) {
                $redir = $redir->with('toast', [
                    'type' => 'warning',
                    'msg'  => 'Iniciá sesión para continuar.'
                ]);
            }
            return $redir;
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}