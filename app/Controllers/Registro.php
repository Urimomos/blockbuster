<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Registro extends BaseController
{
    public function guardar()
    {
        $usuarioModel = new UsuarioModel();

        $email = $this->request->getPost('email_usuario');
        
        // Verificamos si el correo ya existe
        $existe = $usuarioModel->where('email_usuario', $email)->first();
        if ($existe) {
            return redirect()->back()->with('error', 'El correo ya está registrado. Intenta iniciar sesión.');
        }

        // Guardamos al nuevo usuario como Cliente (id_rol = 58)
        $datos = [
            'nombre_usuario'   => $this->request->getPost('nombre_usuario'),
            'ap_usuario'       => $this->request->getPost('ap_usuario'),
            'am_usuario'       => $this->request->getPost('am_usuario'),
            'email_usuario'    => $email,
            'password_usuario' => hash('sha256', $this->request->getPost('password_usuario')),
            'id_rol'           => 58, 
            'estatus_usuario'  => 1
        ];

        $usuarioModel->insert($datos);

        return redirect()->to(base_url('login'))->with('mensaje', '¡Cuenta creada con éxito! Ahora puedes iniciar sesión.');
    }
}