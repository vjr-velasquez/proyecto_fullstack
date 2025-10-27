<?php
namespace App\Models;

use CodeIgniter\Model;

class TipoUsuarioModel extends Model
{
    protected $table = 'tipos_usuarios';
    protected $primaryKey = 'tipo_usuario_id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['tipo_usuario_id', 'nombre_tipo'];

    
}

