<?php

namespace App\Controllers;

class Portal extends BaseController
{
    public function index(): string
    {
        if (! session('isLoggedIn')) {
            return redirect()->to('/')->with('toast', [
                'type' => 'warning',
                'msg'  => 'Iniciá sesión para continuar.'
            ]);
        }
        return view('menu_cliente'); // portal (menu_cliente.php)
    }

    public function vehiculo()
    {
        if (! session('isLoggedIn')) return redirect()->to('/');
        $m = new \App\Models\VehiculoModel();
        $data['vehiculos'] = $m->where('usuario_id',(int)session('usuario_id'))->findAll();
        return view('vehiculos_lista',$data);
    }
    
    public function estadia()
    {
        if (! session('isLoggedIn')) return redirect()->to('/');
        $m = new \App\Models\EstadiaModel();
        // si tuvieras relación usuario-estadía por otra tabla, ajusta aquí
        $data['estadias'] = $m->findAll(); 
        return view('estadia_lista',$data);
    }

}
