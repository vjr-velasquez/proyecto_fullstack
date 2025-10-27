<?php

namespace App\Controllers;

use App\Models\TarifaModel;

class TarifaController extends BaseController
{
    public function index()
    {
        $tarifas = new TarifaModel();
        

        $data['tarifas'] = $tarifas->findAll();

        return view('tarifa_lista', $data);
    }
}