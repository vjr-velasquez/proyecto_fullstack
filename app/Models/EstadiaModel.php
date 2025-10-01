<?php
namespace App\Models;

use CodeIgniter\Model;

class EstadiaModel extends Model
{
    protected $table = 'estadia';
    protected $primaryKey = 'estadia_id';
    protected $returnType = 'array';
    protected $allowedFields = ['estadia_id', 'tarifa_id', 'fecha_hora_entrada', 'costo', 'marbete' ];
}
