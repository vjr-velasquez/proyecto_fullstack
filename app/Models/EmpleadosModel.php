<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadosModel extends Model
{
    protected $table         = 'empleados';
    protected $primaryKey    = 'empleado_id';
    protected $allowedFields = [
        'empleado_id',
        'nombre', 
        'apellido',
        'telefono',
        'correo_electronico',
        'direccion',
        'passsword',
        'tipo_usuario',
    ];

    function tipoUsuario(){
        $this->select('empleados.*, tipos_usuarios.*');
        $this->join('tipos_usuarios', 'empleados.tipo_usuario = tipos_usuarios.tipo_usuario_id');
        $this->orderBy('empleados.empleado_id', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }
    function tipoUsuarioPorId($id){
        $this->select('empleados.*, tipos_usuarios.*');
        $this->join('tipos_usuarios', 'empleados.tipo_usuario = tipos_usuarios.tipo_usuario_id');
        $this->where('empleados.empleado_id', $id);
        $query = $this->get();
        return $query->getRowArray();
    }

}
