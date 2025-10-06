<?php
namespace App\Models;

use CodeIgniter\Model;

class EstadiaModel extends Model
{
    protected $table = 'estadia';
    protected $primaryKey = 'estadia_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    
    protected $allowedFields = ['Estadia_id', 'tarifa_id', 'fecha_hora_entrada', 'fecha_hora_salida', 'costo'];

    function unionTarifas(){
        $this->select('estadia.*, tarifa.*');
        $this->join('tarifa', 'tarifa.tarifa_id = estadia.tarifa_id');
        $query = $this->get();
        return $query->getResultArray();
    }
}

