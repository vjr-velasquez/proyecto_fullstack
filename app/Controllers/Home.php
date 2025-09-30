<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('layout/template');
    }

    public function prueba(): string
    {
        return view('prueba');
    }
}
