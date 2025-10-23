<?php 

namespace App\Controllers;
use App\Models\UsuariosFijosModel;

class LoginUserController extends BaseController

{
    public function index()
    {
        $cliente = new UsuariosFijosModel();

        $usuario = $this->request->getPost('txt_usuario');
        $pass    = $this->request->getPost('txt_contrasena');

        $datos = $cliente->unionUsuarios($usuario, $pass);

        if (! $datos) {
            return view('pagina_principal');
        }

        session()->set([
        'usuario_id'       => $datos['usuario_id'],
        'usuario_nombre'   => $datos['nombre']    ?? '',
        'usuario_apellido' => $datos['apellido']  ?? '',
        'isLoggedIn'       => true,
        ]);

        return view('menu_cliente');
    }
}

?>