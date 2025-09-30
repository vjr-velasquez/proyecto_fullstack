<?php
namespace App\Models;

use CodeIgniter\Model;

class EstadiaModels extends Model
{
    protected $table = 'estadia';
    protected $primaryKey = 'estadia_id';

    protected $allowedFields = [ // Era $allowfields, ahora $allowedFields
        'tarifa_id',
        'fecha_hora_entrada',
        'fecha_hora_salida',
        'costo'
    ];

    // Resto de tu código permanece igual...
    public function calcularCostoPorHora($fechaEntrada, $fechaSalida, $tarifaPorHora)
    {
        $horas = (strtotime($fechaSalida) - strtotime($fechaEntrada)) / 3600;
        $horas = ceil($horas);
        return $horas * $tarifaPorHora;
    }

    public function calcularCostoPorMes($fechaEntrada, $fechaSalida, $tarifaPorMes)
    {
        $meses = ((date('Y', strtotime($fechaSalida)) - date('Y', strtotime($fechaEntrada))) * 12)
                + (date('m', strtotime($fechaSalida)) - date('m', strtotime($fechaEntrada)));
        
        if (date('d', strtotime($fechaSalida)) > date('d', strtotime($fechaEntrada))) {
            $meses += 1;
        }
        $meses = max($meses, 1);
        return $meses * $tarifaPorMes;
    }
}
?>