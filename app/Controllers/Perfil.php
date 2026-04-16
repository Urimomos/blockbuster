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

        $id_usuario = session()->get('id_usuario');

        // 1. Traemos los datos básicos del usuario
        $usuarioModel = new UsuarioModel();
        $datos['usuario'] = $usuarioModel->find($id_usuario);

        // 2. Traemos los datos de su suscripción (uniendo usuarios_planes con planes)
        $db = \Config\Database::connect();
        $builder = $db->table('usuarios_planes');
        $builder->select('usuarios_planes.*, planes.nombre_plan, planes.cantidad_limite_plan');
        $builder->join('planes', 'planes.id_plan = usuarios_planes.id_plan');
        $builder->where('usuarios_planes.id_usuario', $id_usuario);
        // Ordenamos por ID descendente para traer siempre el movimiento más reciente
        $builder->orderBy('usuarios_planes.id_usuario_plan', 'DESC'); 
        
        $datos['mi_plan'] = $builder->get()->getRowArray();

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

        $foto = $this->request->getFile('imagen_usuario');

        if ($foto->isValid() && !$foto->hasMoved()) {
            $nuevoNombre = $foto->getRandomName();
            
            // 1. Movemos la imagen físicamente a la carpeta
            $foto->move(FCPATH . 'img/perfiles', $nuevoNombre); 

            // 2. Actualizamos la Base de Datos
            $usuarioModel->update($id, ['imagen_usuario' => $nuevoNombre]);

            // --- ESTO ES EL PASO 2 ---
            // 3. Actualizamos la SESIÓN para que el Header (menú) cambie al instante
            session()->set('imagen_usuario', $nuevoNombre);
            // -------------------------

            return redirect()->to(base_url('perfil'))->with('mensaje', 'Foto de perfil actualizada.');
        }

        return redirect()->to(base_url('perfil'))->with('error', 'Hubo un problema al subir la foto.');
    }
}