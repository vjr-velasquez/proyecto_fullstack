<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table         = 'usuarios';
    protected $primaryKey    = 'usuario_id';
    protected $allowedFields = [
        'usuario_id',
        'nit',
        'nombre', 
        'apellido',
        'direccion'
    ];



}
