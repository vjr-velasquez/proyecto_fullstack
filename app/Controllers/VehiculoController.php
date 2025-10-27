<?php

namespace App\Controllers;

use App\Models\VehiculoModel;
use App\Models\MarcasModel;

class VehiculoController extends BaseController
{
    public function index()
    {
        $vehiculoModel = new VehiculoModel();
        $marcasModel = new MarcasModel();
        $usuarioId = session()->get('usuario_id');


        $data['vehiculos'] = $vehiculoModel->vehiculosLista(session()->get('usuario_id'));
        $data['marcas'] = $marcasModel->findAll();
        
        //$data['vehiculos'] = $vehiculoModel->where('usuario_id', $usuarioId)->findAll();

        return view('vehiculos_lista', $data);
    }

    public function agregarVehiculo(){
        $vehiculos = new \App\Models\VehiculoModel();

        $datos = [
            'matricula' => $this->request->getPost('txt_matricula'),
            'usuario_id'  => session()->get('usuario_id'),
            'marca' => $this->request->getPost('txt_marca'),
            'modelo' => $this->request->getPost('txt_modelo'),
            'color' => $this->request->getPost('txt_color')
        ];

        try {
            $insertId = $vehiculos->insert($datos);
            if ($insertId === false) {
                session()->setFlashdata('mensaje', 'Error al agregar la estadía (insert devolvió false)');
                session()->setFlashdata('tipo', 'error');
            } else {
                session()->setFlashdata('mensaje', 'Estadía agregada correctamente. ID: ' . $insertId);
                session()->setFlashdata('tipo', 'success');
            }
        } catch (\Throwable $e) {
            log_message('error', 'Error insertar estadia: ' . $e->getMessage());
            session()->setFlashdata('mensaje', 'Excepción al insertar: ' . $e->getMessage());
            session()->setFlashdata('tipo', 'error');
        }

        return redirect()->to(base_url().'vehiculos');
    }
}