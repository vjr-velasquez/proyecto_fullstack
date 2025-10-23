<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pagina_principal');
    }

    public function login(): string
    {
        return view('form_cliente');
    }
}
