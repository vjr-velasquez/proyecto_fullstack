<?php
namespace App\Models;

use CodeIgniter\Model;

class MarcasModel extends Model
{
    protected $table = 'marcas';
    protected $primaryKey = 'marca_id';
    
    protected $allowedFields = ['marca_id','nombre_marca'];

}   
