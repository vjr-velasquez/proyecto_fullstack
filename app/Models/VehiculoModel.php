<?php

namespace App\Models;

use CodeIgniter\Model;

class VehiculoModel extends Model
{
    protected $table = 'vehiculos';
    protected $primaryKey = 'vehiculo_id';
    protected $returnType = 'array';
    protected $allowedFields = ['usuario_id', 'nombre', 'descripcion', 'matricula'];
}