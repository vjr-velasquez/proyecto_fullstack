<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosFijosModel extends Model
{
    protected $table            = 'usuarios_fijos';
    protected $primaryKey       = 'usuario_id';
    protected $returnType       = 'array';
    protected $allowedFields    = ['usuario_id','tipo_identificacion','no_identificacion','correo_electronico','password'];

    public function findByIdentificacion(string $noIdentificacion): ?array
    {
        return $this->select('usuarios_fijos.*, usuarios.usuario_id, usuarios.nit, usuarios.nombre, usuarios.apellido, usuarios.direccion')
            ->join('usuarios', 'usuarios.usuario_id = usuarios_fijos.usuario_id', 'inner')
            ->where('usuarios_fijos.no_identificacion', $noIdentificacion)
            ->first();
    }
}

?>