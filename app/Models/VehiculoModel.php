<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model
{
    protected $table = 'vehiculos';
    protected $primaryKey = 'vehiculo_id';
    protected $returnType = 'array';
    protected $allowedFields = ['matricula', 'usuario_id', 'marca', 'modelo', 'color'];

    function vehiculosLista($id){
        $this->select('vehiculos.*, marcas.*');
        $this->join('marcas','vehiculos.marca = marcas.marca_id');
        $this->where('vehiculos.usuario_id', $id);
        $query = $this->get();
        return $query->getResultArray();
    }

}