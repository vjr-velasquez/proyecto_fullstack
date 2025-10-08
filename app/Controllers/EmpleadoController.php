<?php
    namespace App\Controllers;
    //Utilizamos el modelo
    use App\Models\EmpleadosModel;
    use App\Models\TipoUsuarioModel;

    class EmpleadoController extends BaseController
    {
        public function index(): string
        {
            //Creamos un objeto de tipo EmpleadosModel
            $empleado = new EmpleadosModel();

            // Realizamos la busqueda con el findAll
            $datos['datos']=$empleado->tipoUsuario(); 

            $tipoUsuario = new TipoUsuarioModel();

            $datos['tipoUsuario'] = $tipoUsuario->findAll();
            return view('empleados', $datos); 
        }
        public function agregarEmpleado()
        {
            $datos = [
                'empleado_id' => $this->request->getPost('txt_id'),
                'nombre' => $this->request->getPost('txt_nombre'),
                'apellido' => $this->request->getPost('txt_apellido'),
                'telefono' => $this->request->getPost('txt_telefono'),
                'correo_electronico' => $this->request->getPost('txt_correo'),
                'direccion' => $this->request->getPost('txt_direccion'),
                'tipo_usuario' => $this->request->getPost('txt_tipo_usuario')
            ];
            //print_r($datos);
            
            // Inserta en la base de datos
            $empleado = new EmpleadosModel();
            $empleado->insert($datos);
            return $this->index();
            


        }


        public function eliminar($id)
        {
            //echo "Id enviado:  ".$id;
            $empleado = new EmpleadosModel();
            $empleado->delete($id);
            return $redirect()->back()->with('mensaje','El empleado ha sido eliminado correctamente');

        }
        public function actualizar($id)
        {
            $empleado = new EmpleadosModel();
            
            // Obtener el empleado específico con su tipo de usuario
            $datos['datos'] = $empleado->tipoUsuarioPorId($id);
            
            // Lista de tipos de usuario para el select
            $tipoUsuario = new TipoUsuarioModel();
            $datos['tipoUsuario'] = $tipoUsuario->findAll();
            
            return view('editar_empleado', $datos);
        }

        public function editar()
        {
            $datos=[
                'empleado_id'=>$this->request->getPost('txt_id'),
                'nombre'=>$this->request->getPost('txt_nombre'),
                'apellido'=>$this->request->getPost('txt_apellido'),
                'telefono'=>$this->request->getPost('txt_telefono'),
                'puesto_id'=>$this->request->getPost('txt_puesto_id'),
                'fecha_nacimiento'=>$this->request->getPost('txt_fecha_nacimiento')
            ];
            $empleado = new EmpleadosModel();
            $empleado->update($datos['empleado_id'],$datos);
            return $this->index();
        }
    }
?>