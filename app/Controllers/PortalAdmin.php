<?php

namespace App\Controllers;

class PortalAdmin extends BaseController
{
    public function index()
    {
        if (! session('isStaff') || ! session('isAdmin')) return redirect()->to('staff/login');
        return view('menu_admin'); // vista menú con tus tiles
    }
}
