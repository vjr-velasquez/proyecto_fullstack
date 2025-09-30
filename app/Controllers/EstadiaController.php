<?php
namespace App\Controllers;

use App\Models\EstadiaModels;

class EstadiaController extends BaseController
{
    // Método para mostrar la vista del formulario
    public function estadia()
    {
        return view('estadia'); 
    }

    public function calcular()
    {
        $tarifaId = $this->request->getPost('tarifa_id');
        $fechaEntrada = $this->request->getPost('fecha_hora_entrada');
        $fechaSalida = $this->request->getPost('fecha_hora_salida');

        $model = new EstadiaModels();

        if($tarifaId == 1){
            $tarifaPorHora = 5;
            $costo = $model->calcularCostoPorHora($fechaEntrada, $fechaSalida, $tarifaPorHora);
            return $this->response->setJSON(['costo' => $costo]);
        } elseif($tarifaId == 2){
            $tarifaPorMes = 100;
            $costo = $model->calcularCostoPorMes($fechaEntrada, $fechaSalida, $tarifaPorMes);
            return $this->response->setJSON(['costo' => $costo]);
        } else {
            return $this->response->setJSON(['error' => 'Tarifa no válida']);
        }
    }
}
?>