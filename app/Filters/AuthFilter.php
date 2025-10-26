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

            $suppress = session()->getTempdata('suppressWarn'); // true si viene de logout reciente
            $redir = redirect()->to('/');

            if (!$suppress) {
                $redir = $redir->with('toast', [
                    'type' => 'warning',
                    'msg'  => 'Iniciá sesión para continuar.'
                ]);
            }
            return $redir;
        }
    }
    public function after(RequestInterface $request, 
    ResponseInterface $response, $arguments = null) {}
}

?>