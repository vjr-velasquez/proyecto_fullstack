<?php

namespace App\Controllers;

use App\Models\VehiculoModel;

class VehiculoController extends BaseController
{
    public function index()
    {
        $vehiculoModel = new VehiculoModel();
        
        $usuarioId = session()->get('usuario_id'); 

        $data['vehiculos'] = $vehiculoModel->where('usuario_id', $usuarioId)->findAll();

        return view('vehiculos_lista', $data);
    }
}