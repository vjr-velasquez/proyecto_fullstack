<?php

namespace App\Controllers;

use App\Models\EmpleadosModel;

class StaffAuth extends BaseController
{
    public function showLogin()
    {
        if (session('isStaff')) {
            return redirect()->to( session('isAdmin') ? site_url('admin') : site_url('empleado') )
                ->with('toast',['type'=>'info','msg'=>'Ya tenés sesión iniciada.']);
        }
        return view('form_staff'); // nuevo login para admin/empleado
    }

    public function attempt()
    {
        $rules = [
            'txt_correo' => 'required|valid_email',
            'txt_pass'   => 'required|min_length[4]|max_length[100]',
        ];
        if (! $this->validate($rules)) {
            return redirect()->back()->with('val_errors', $this->validator->getErrors())
                   ->with('toast',['type'=>'danger','msg'=>'Revisá los campos.'])->withInput();
        }

        $mail = (string)$this->request->getPost('txt_correo');
        $pass = (string)$this->request->getPost('txt_pass');

        $m = new EmpleadosModel();
        $row = $m->where('correo_electronico',$mail)->first();

        if (! $row || !hash_equals((string)$row['password'],$pass)) {
            return redirect()->back()->with('toast',['type'=>'danger','msg'=>'Credenciales inválidas.'])->withInput();
        }

        $isAdmin = ((int)$row['tipo_usuario'] === 1); // ajusta según tu catálogo
        session()->regenerate(true);
        session()->set([
            'staff_id'   => (int)$row['empleado_id'],
            'staff_name' => $row['nombre'],
            'isStaff'    => true,
            'isAdmin'    => $isAdmin,
        ]);

        return redirect()->to( $isAdmin ? site_url('admin') : site_url('empleado') )
            ->with('toast',['type'=>'success','msg'=>'Bienvenido.']);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('staff/login'))->with('toast',['type'=>'info','msg'=>'Sesión cerrada.']);
    }
}
