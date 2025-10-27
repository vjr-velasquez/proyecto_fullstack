<?php

namespace App\Controllers;

use App\Models\MarcasModel;

class MarcaController extends BaseController
{
    public function index()
    {
        $marca = new MarcasModel();
        

        $data['marcas'] = $marca->findAll();

        return view('marcas', $data);
    }
}