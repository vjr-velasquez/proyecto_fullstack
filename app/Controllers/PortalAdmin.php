<?php

namespace App\Controllers;

class PortalAdmin extends BaseController
{
    public function index(): string
    {
        if (! session('isStaff') || ! session('isAdmin')) {
            return redirect()->to(site_url('staff/login'))
                ->with('toast', ['type'=>'warning','msg'=>'Acceso solo para administradores.']);
        }
        return view('menu_admin');
    }
}
