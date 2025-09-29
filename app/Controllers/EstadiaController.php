<?php

namespace App\Controllers;
use App\Models\EstadiaModel;

class EstadiaController extends BaseController
{
    public function index(): string
    {
        $estadia = new EstadiaModel();
        $datos['datos'] = $estadia->findAll();
        return view('estadia/index', $datos);
    }

    // eliminar estadia
    public function eliminar($id)
    {
        $estadia = new EstadiaModel();
        if($estadia->delete($id)){
            session()->setFlashdata('mensaje', 'Estadía eliminada correctamente');
            session()->setFlashdata('tipo', 'success');
        } else {
            session()->setFlashdata('mensaje', 'Error al eliminar la estadía');
            session()->setFlashdata('tipo', 'error');
        }
        return redirect()->to(base_url().'/estadia');
    }

    // agregar estadia
    public function agregarEstadia()
    {
        $estadia = new EstadiaModel();
        $datos = [
            'tarifa_id'          => $this->request->getPost('txt_tarifa_id'),
            'fecha_hora_entrada' => $this->request->getPost('txt_fecha_entrada'),
            'fecha_hora_salida'  => $this->request->getPost('txt_fecha_salida'),
            'costo'              => $this->request->getPost('txt_costo'),
            'marbete'            => $this->request->getPost('txt_marbete')
        ];

        if($estadia->insert($datos)){
            session()->setFlashdata('mensaje', 'Estadía agregada correctamente');
            session()->setFlashdata('tipo', 'success');
        } else {
            session()->setFlashdata('mensaje', 'Error al agregar la estadía');
            session()->setFlashdata('tipo', 'error');
        }

        return redirect()->to(base_url().'/estadia');
    }

    // buscar estadia
    public function buscar($id)
    {   
        $estadia = new EstadiaModel();
        $datos['datos'] = $estadia->where(['estadia_id' => $id])->first();
        return view('estadia/form_modificar', $datos);
    }

    // editar estadia
    public function editar()
    {
        $estadia = new EstadiaModel();
        $id = $this->request->getPost('txt_estadia_id');
        $datos = [
            'tarifa_id'          => $this->request->getPost('txt_tarifa_id'),
            'fecha_hora_entrada' => $this->request->getPost('txt_fecha_entrada'),
            'fecha_hora_salida'  => $this->request->getPost('txt_fecha_salida'),
            'costo'              => $this->request->getPost('txt_costo'),
            'marbete'            => $this->request->getPost('txt_marbete')
        ];

        if($estadia->update($id, $datos)){
            session()->setFlashdata('mensaje', 'Estadía actualizada correctamente');
            session()->setFlashdata('tipo', 'success');
        } else {
            session()->setFlashdata('mensaje', 'Error al actualizar la estadía');
            session()->setFlashdata('tipo', 'error');
        }

        return redirect()->to(base_url().'/estadia');
    }
}
