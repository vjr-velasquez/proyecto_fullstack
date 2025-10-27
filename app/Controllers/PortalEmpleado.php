<?php

namespace App\Controllers;

class PortalEmpleado extends BaseController
{
    public function index(): string
    {
        if (! session('isStaff')) {
            return redirect()->to(site_url('staff/login'))
                ->with('toast', ['type'=>'warning','msg'=>'Iniciá sesión para continuar.']);
        }
        // Bloquea admins si querés que entren por su portal:
        // if (session('isAdmin')) return redirect()->to(site_url('admin'));
        return view('menu_empleado');
    }
}
