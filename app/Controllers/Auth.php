<?php

namespace App\Controllers;
use App\Models\UsuariosFijosModel;

class Auth extends BaseController
{
    public function showLogin()
    {
        return view('form_cliente');
    }

    public function attempt()
    {
        $validation = service('validation');
        $rules = [
            'txt_usuario'    => 'required|is_natural_no_zero|min_length[6]|max_length[13]',
            'txt_contrasena' => 'required|min_length[8]|max_length[100]',
            csrf_token()     => 'required'
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->to(site_url('/'))
                ->with('toast', ['type' => 'danger', 'msg' => 'Revisá los campos del formulario.'])
                ->with('val_errors', $validation->getErrors())
                ->withInput();
        }

        $usuario = $this->request->getPost('txt_usuario');
        $pass    = $this->request->getPost('txt_contrasena');

        $clientes = new UsuariosFijosModel();
        $row = $clientes->findByIdentificacion($usuario);

        if (! $row || ! $this->verifyPassword($pass, $row['password'])) {
            $this->throttle($usuario);
            return redirect()
                ->to(site_url('/'))
                ->with('toast', ['type' => 'danger', 'msg' => 'Credenciales inválidas.'])
                ->withInput();
        }

        // Regenerar ID de sesión en login
        $session = session();
        $session->regenerate(true);

        // Guardar datos mínimos
        $session->set([
            'usuario_id'       => (int) $row['usuario_id'],
            'usuario_nombre'   => $row['nombre']    ?? '',
            'usuario_apellido' => $row['apellido']  ?? '',
            'isLoggedIn'       => true,
        ]);

        // redirige a portal con toast success
        return redirect()
            ->to(site_url('portal'))
            ->with('toast', ['type' => 'success', 'msg' => 'Inicio de sesión correcto.']);
    }

    public function logout()
    {
        $session = session();

        // Quita datos de autenticación
        $session->remove(['usuario_id', 'usuario_nombre', 'usuario_apellido', 'isLoggedIn']);
        
        // Evita fijación de sesión 
        $session->regenerate(true);

        // Suprime warning por unos segundos (para el "Atrás" inmediato)
        $session->setTempdata('suppressWarn', true, 0); // 8s es suficiente

        // Redirige a login con toast INFO
        return redirect()
            ->to(site_url('login'))
            ->with('toast', ['type' => 'info', 'msg' => 'Sesión cerrada.']);
    }

    private function verifyPassword(string $plain, string $stored): bool
    {
        return hash_equals($stored, $plain);
    }

    private function throttle(string $usuario): void
    {
        $cache = cache();
        $key = 'login_try_' . md5($usuario . '_' . $this->request->getIPAddress());
        $tries = (int) ($cache->get($key) ?? 0) + 1;
        $cache->save($key, $tries, 300);
    }
}

?>