<?php
namespace App\Models;

use CodeIgniter\Model;

class FacturaModel extends Model
{
    protected $table = 'facturas';
    protected $primaryKey = 'factura_id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['numero_factura','fecha_impresion', 'nit', 'direccion', 'monto', 'tipo_pago_id'];

    
}   
