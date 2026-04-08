<?php

namespace App\Controllers;
use App\Models\UsuarioModel; // Importamos el modelo

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function autenticar()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->validarUsuario($email, $password);

        if ($usuario) {
            session()->set([
                'is_logged_in' => true,
                'id_usuario'   => $usuario['id_usuario'],
                'nombre'       => $usuario['nombre_usuario'] . ' ' . $usuario['ap_usuario'],
                'email'        => $usuario['email_usuario'],
                'id_rol'       => $usuario['id_rol'],
                'rol_nombre'   => $usuario['nombre_rol'] 
            ]);

            if ($usuario['id_rol'] == 745 || $usuario['id_rol'] == 125) {
                return redirect()->to(base_url('admin/dashboard'));
            } else {
               
                return redirect()->to(base_url('/'));
            }
        } else {
            return redirect()->to(base_url('login'))->with('error', 'Credenciales incorrectas o cuenta deshabilitada.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}