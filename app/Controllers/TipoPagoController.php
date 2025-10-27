<?php

namespace App\Controllers;

use App\Models\TipoPagoModel;

class TipoPagoController extends BaseController
{
    public function index()
    {
        $pagoModel = new TipoPagoModel();
        

        $data['tipoPago'] = $pagoModel->findAll();

        return view('tipo_pago_lista', $data);
    }
}