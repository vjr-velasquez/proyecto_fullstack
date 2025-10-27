<?php

namespace App\Controllers;

use App\Models\CarrilesModel;

class CarrilController extends BaseController
{
    public function index()
    {
        $carril = new CarrilesModel();
        

        $data['carriles'] = $carril->findAll();

        return view('carriles_lista', $data);
    }
}