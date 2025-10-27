<?php

namespace App\Controllers;

use App\Models\FacturaModel;

class FacturaController extends BaseController
{
    public function index()
    {
        $facturas = new FacturaModel();
        

        $data['facturas'] = $facturas->findAll();

        return view('facturas', $data);
    }
}