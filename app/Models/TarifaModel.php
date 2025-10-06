<?php
namespace App\Models;

use CodeIgniter\Model;

class TarifaModel extends Model
{
    protected $table = 'tarifa';
    protected $primaryKey = 'tarifa_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    
    protected $allowedFields = ['tarifa_id','descripcion', 'precio'];

    function unionTarifas(){
        $this->select('estadia.*, tarifa.*');
        $this->join('tarifa', 'tarifa.tarifa_id = estadia.tarifa_id');
        $query = $this->get();
        return $query->getResultArray();
    }
}   
