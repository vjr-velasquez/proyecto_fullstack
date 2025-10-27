<?php
    namespace App\Controllers;
    //Utilizamos el modelo
    use App\Models\UsuariosModel;

    class UsuarioController extends BaseController
    {
        public function index(): string
        {
            //Creamos un objeto de tipo UsuariosModel
            $usuario = new UsuariosModel();

            $datos['datos'] = $usuario->findAll();


            return view('usuarios', $datos); 
        }
        public function agregarUsuario()
        {
            $datos = [
                'nit' => $this->request->getPost('txt_nit'),
                'nombre' => $this->request->getPost('txt_nombre'),
                'apellido' => $this->request->getPost('txt_apellido'),
                'direccion' => $this->request->getPost('txt_direccion')
            ];
            
            // Inserta en la base de datos
            $usuario = new UsuariosModel();
            $usuario->insert($datos);
            return redirect()->route('usuarios');

            


        }


        public function eliminar($id)
        {
            //echo "Id enviado:  ".$id;
            $usuario = new UsuariosModel();
            $usuario->delete($id);
            return redirect()->route('usuarios');

        }
        public function actualizar($id)
        {
            $Usuario = new UsuariosModel();
            
            // Obtener el Usuario específico con su tipo de usuario
            $datos['datos'] = $Usuario->tipoUsuarioPorId($id);
            
            // Lista de tipos de usuario para el select
            $tipoUsuario = new TipoUsuarioModel();
            $datos['tipoUsuario'] = $tipoUsuario->findAll();
            
            return view('editar_Usuario', $datos);
        }

        public function editar()
        {
            $datos=[
                'nit' => $this->request->getPost('txt_nit'),
                'nombre' => $this->request->getPost('txt_nombre'),
                'apellido' => $this->request->getPost('txt_apellido'),
                'direccion' => $this->request->getPost('txt_direccion')
            ];
            $usuario = new UsuariosModel();
            $usuario->update($datos['usuario_id'],$datos);
            return redirect()->route('usuarios');

        }
    }
?>