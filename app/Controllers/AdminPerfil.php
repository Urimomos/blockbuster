<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class AdminPerfil extends BaseController
{
    private function verificarAcceso()
    {
        $rol = session()->get('id_rol');
        // Permitimos acceso a Administradores (745) y Operadores (125)
        if ($rol != 745 && $rol != 125) return false;
        return true;
    }

    public function index()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('login'));

        $usuarioModel = new UsuarioModel();
        $id_usuario = session()->get('id_usuario');
        
        $datos['usuario'] = $usuarioModel->find($id_usuario);

        return view('admin/perfil/index', $datos);
    }

    public function actualizar()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('login'));

        $usuarioModel = new UsuarioModel();
        $id = session()->get('id_usuario');

        $datos = [
            'nombre_usuario' => $this->request->getPost('nombre_usuario'),
            'ap_usuario'     => $this->request->getPost('ap_usuario'),
            'am_usuario'     => $this->request->getPost('am_usuario'),
            'email_usuario'  => $this->request->getPost('email_usuario')
        ];

        $password = $this->request->getPost('password_usuario');
        if (!empty($password)) {
            $datos['password_usuario'] = hash('sha256', $password); 
        }

        $usuarioModel->update($id, $datos);
        
        // Actualizamos la información en la sesión actual
        session()->set('nombre', $datos['nombre_usuario'] . ' ' . $datos['ap_usuario']);
        session()->set('email', $datos['email_usuario']);

        return redirect()->to(base_url('admin/perfil'))->with('mensaje', 'Perfil actualizado correctamente.');
    }

    public function subir_foto()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('login'));

        $usuarioModel = new UsuarioModel();
        $id = session()->get('id_usuario');

        $foto = $this->request->getFile('imagen_usuario');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $nuevoNombre = $foto->getRandomName();
            $foto->move(FCPATH . 'img/perfiles', $nuevoNombre); 

            $usuarioModel->update($id, ['imagen_usuario' => $nuevoNombre]);
            session()->set('imagen_usuario', $nuevoNombre); // Actualiza la cabecera en vivo

            return redirect()->to(base_url('admin/perfil'))->with('mensaje', 'Foto de perfil actualizada.');
        }

        return redirect()->to(base_url('admin/perfil'))->with('error', 'Hubo un problema al subir la foto.');
    }
}