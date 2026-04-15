<?php

namespace App\Controllers;
// Usamos TU modelo exacto (en singular)
use App\Models\UsuarioModel;

class Perfil extends BaseController
{
    public function index()
    {
        if (!session()->get('is_logged_in')) {
            return redirect()->to(base_url('login'));
        }

        $usuarioModel = new UsuarioModel();
        $datos['usuario'] = $usuarioModel->find(session()->get('id_usuario'));

        return view('perfil', $datos);
    }

    public function actualizar()
    {
        if (!session()->get('is_logged_in')) return redirect()->to(base_url('login'));

        $usuarioModel = new UsuarioModel();
        $id = session()->get('id_usuario');

        // Usamos los nombres exactos de TUS columnas en la BD
        $datos = [
            'nombre_usuario' => $this->request->getPost('nombre_usuario'),
            'email_usuario'  => $this->request->getPost('email_usuario')
        ];

        // Si escribió contraseña, la actualizamos (usando hash sha256 como lo tienes en tu login)
        $password = $this->request->getPost('password_usuario');
        if (!empty($password)) {
            $datos['password_usuario'] = hash('sha256', $password); 
        }

        $usuarioModel->update($id, $datos);
        
        // Actualizamos el nombre en la sesión actual para que cambie arriba a la derecha
        session()->set('nombre', $datos['nombre_usuario']);

        return redirect()->to(base_url('perfil'))->with('mensaje', 'Datos actualizados correctamente.');
    }

    public function subir_foto()
    {
        if (!session()->get('is_logged_in')) return redirect()->to(base_url('login'));

        $usuarioModel = new UsuarioModel();
        $id = session()->get('id_usuario');

        // Recibimos el archivo con el nuevo nombre de tu formulario
        $foto = $this->request->getFile('imagen_usuario');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $nuevoNombre = $foto->getRandomName();
            // Movemos la imagen a public/img/perfiles
            $foto->move(FCPATH . 'img/perfiles', $nuevoNombre); 

            // Guardamos en TU columna 'imagen_usuario'
            $usuarioModel->update($id, ['imagen_usuario' => $nuevoNombre]);

            return redirect()->to(base_url('perfil'))->with('mensaje', 'Foto de perfil actualizada.');
        }

        return redirect()->to(base_url('perfil'))->with('error', 'Hubo un problema al subir la foto.');
    }
}