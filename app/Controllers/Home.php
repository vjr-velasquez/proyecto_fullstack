<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pagina_principal');
    }

    public function prueba(): string
    {
        return view('menu_cliente');
    }


}
