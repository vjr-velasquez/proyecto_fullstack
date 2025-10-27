<?php

namespace App\Controllers;
use App\Models\EstadiaModel;

class EstadiaController extends BaseController
{
    public function index(): string
{
    
    if(session()->get('staff_id')){
        $estadia = new EstadiaModel();
        $datos['datos'] = $estadia->estadiaLista();

        $datos['datosEmpleados'] = $estadia->findAll();

        $tarifaModel = new \App\Models\TarifaModel();
        $datos['tarifas'] = $tarifaModel->findAll();
        return view('estadiaEmpleados', $datos);
    }else{
        $estadia = new EstadiaModel();
        $datos['datos'] = $estadia->estadiaUsuario(session()->get('usuario_id'));

        $datos['datosEmpleados'] = $estadia->findAll();

        $tarifaModel = new \App\Models\TarifaModel();
        $datos['tarifas'] = $tarifaModel->findAll();
        return view('estadia', $datos);
    }
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
        return redirect()->to(base_url().'estadia');
    }

    // agregar estadia
     public function agregarEstadia()
{
    $estadia = new \App\Models\EstadiaModel();
    $tarifa_id = $this->request->getPost('txt_tarifa_id');

    // validar que la tarifa exista
    $tarifaModel = new \App\Models\TarifaModel();
    if (empty($tarifa_id) || !$tarifaModel->find($tarifa_id)) {
        session()->setFlashdata('mensaje', 'Tarifa inválida o no existente.');
        session()->setFlashdata('tipo', 'error');
        return redirect()->to(base_url().'estadia');
    }

    $datos = [
        'tarifa_id'          => $tarifa_id,
        'fecha_hora_entrada' => $this->request->getPost('txt_fecha_entrada'),
        'fecha_hora_salida'  => $this->request->getPost('txt_fecha_salida'),
        'costo'              => $this->request->getPost('txt_costo'),
    ];

    try {
        $insertId = $estadia->insert($datos);
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

    return redirect()->to(base_url().'estadia');
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
            
        ];

        if($estadia->update($id, $datos)){
            session()->setFlashdata('mensaje', 'Estadía actualizada correctamente');
            session()->setFlashdata('tipo', 'success');
        } else {
            session()->setFlashdata('mensaje', 'Error al actualizar la estadía');
            session()->setFlashdata('tipo', 'error');
        }

        return redirect()->to(base_url().'estadia');
    }

    

}