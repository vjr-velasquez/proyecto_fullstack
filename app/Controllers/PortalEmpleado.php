<?php

namespace App\Controllers;

class PortalEmpleado extends BaseController
{
    public function index()
    {
        if (! session('isStaff') || session('isAdmin')) return redirect()->to('staff/login');
        return view('menu_empleado'); // vista menú con tus tiles
    }
}
