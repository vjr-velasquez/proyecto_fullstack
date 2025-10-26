<?php

namespace App\Controllers;

class Portal extends BaseController
{
    public function index(): string
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/')->with('toast', [
                'type' => 'warning',
                'msg'  => 'Iniciá sesión para continuar.'
            ]);
        }
        return view('menu_cliente'); // tu portal (menu_cliente.php)
    }

    public function estadia(): string
    {
        if (! session('isLoggedIn')) return redirect()->to('/');

        // aquí consultá por session('usuario_id') y armá la vista
        return view('portal/estadia'); // crea la vista si la vas a usar
    }

    public function usuario(): string
    {
        if (! session('isLoggedIn')) return redirect()->to('/');

        return view('portal/usuario'); // crea la vista si la vas a usar
    }
}
