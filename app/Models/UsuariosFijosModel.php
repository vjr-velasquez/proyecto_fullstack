<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuariosFijosModel extends Model
{
    protected $table = 'usuarios_fijos';
    protected $primaryKey = 'usuario_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    
    protected $allowedFields = ['usuario_id', 'tipo_identificacion', 'no_identificacion', 'correo_electronico', 'password'];

    function unionUsuarios($usuario, $contraseña){
        $this->select('usuarios_fijos.*, usuarios.*');
        $this->join('usuarios', 'usuarios_fijos.usuario_id = usuarios.usuario_id', 'inner');
        $this->where('usuarios_fijos.no_identificacion', $usuario);
        $this->where('usuarios_fijos.password', $contraseña);
        $query = $this->get();
        $datos = $query->getResultArray();
        print_r($datos[0]['usuario_id']);
        //return $query;
    }
}

