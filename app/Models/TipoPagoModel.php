<?php
namespace App\Models;

use CodeIgniter\Model;

class TipoPagoModel extends Model
{
    protected $table = 'tipo_pago';
    protected $primaryKey = 'tipo_pago_id';
    
    protected $allowedFields = ['tipo_pago_id','nombre_tipo'];

}   
