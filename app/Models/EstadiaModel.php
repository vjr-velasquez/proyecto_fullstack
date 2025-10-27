<?php
namespace App\Models;

use CodeIgniter\Model;

class EstadiaModel extends Model
{
    protected $table = 'estadia';
    protected $primaryKey = 'estadia_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    
    protected $allowedFields = ['Estadia_id', 'tarifa_id', 'fecha_hora_entrada', 'fecha_hora_salida', 'costo'];

    function estadiaUsuario($id){
        $this->select('estadia.*, tarifa.*, vehiculos.matricula');
        $this->join('tarifa', 'tarifa.tarifa_id = estadia.tarifa_id');
        $this->join('estadia_vehiculo', 'estadia.estadia_id = estadia_vehiculo.estadia_id');
        $this->join('vehiculos', 'estadia_vehiculo.vehiculo_id = vehiculos.vehiculo_id');
        $this->join('usuarios', 'vehiculos.usuario_id = usuarios.usuario_id');
        $this->where('usuarios.usuario_id', $id);
        $query = $this->get();
        return $query->getResultArray();
    }
}

