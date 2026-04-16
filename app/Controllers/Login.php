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

        // 1. ENCRIPTAMOS LA CONTRASEÑA EN SHA-256 PARA QUE COINCIDA CON LA BD
        $passwordHashed = hash('sha256', $password);

        $usuarioModel = new UsuarioModel();
        
        // 2. LE PASAMOS LA CONTRASEÑA YA ENCRIPTADA AL MODELO
        $usuario = $usuarioModel->validarUsuario($email, $passwordHashed);

        if ($usuario) {
            session()->set([
                'is_logged_in'   => true,
                'id_usuario'     => $usuario['id_usuario'],
                'nombre'         => $usuario['nombre_usuario'] . ' ' . $usuario['ap_usuario'],
                'email'          => $usuario['email_usuario'],
                'id_rol'         => $usuario['id_rol'],
                'rol_nombre'     => $usuario['nombre_rol'],
                'imagen_usuario' => $usuario['imagen_usuario'] // <-- ¡ESTA ES LA LÍNEA MÁGICA!
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

   /* public function autenticar()
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
    }*/

   public function logout() // <--- Debe llamarse logout
{
    session()->destroy();
    return redirect()->to(base_url('login'));
}
    // Función para mostrar el Panel Administrador
    public function dashboard()
    {
        // Candado de seguridad: si no ha iniciado sesión, lo manda al login
        if (!session()->get('is_logged_in')) {
            return redirect()->to(base_url('login'));
        }

        // Si todo está bien, muestra la vista del panel
        return view('admin/dashboard');
    }
}