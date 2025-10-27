<?php
namespace App\Models;

use CodeIgniter\Model;

class CarrilesModel extends Model
{
    protected $table = 'carriles';
    protected $primaryKey = 'carril_id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['carril_id', 'disponibilidad'];

    
}

