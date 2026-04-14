<?php
namespace App\Controllers;
use App\Models\UsuarioModel;

class Usuarios extends BaseController {
    
    public function index() {
        // Seguridad: Solo Administradores (745)
        if (session()->get('id_rol') != 745) return redirect()->to(base_url('admin/dashboard'));

        $usuarioModel = new UsuarioModel();
        
        // Hacemos un JOIN manual para traer el nombre del rol
        $usuarios = $usuarioModel->select('usuarios.*, roles.nombre_rol')
                                 ->join('roles', 'roles.id_rol = usuarios.id_rol')
                                 ->orderBy('id_usuario', 'DESC')
                                 ->findAll();

        $datos = [
            'titulo'   => 'Gestión de Usuarios',
            'usuarios' => $usuarios
        ];

        return view('admin/usuarios/index', $datos);
    }

    public function guardar() {
        if (session()->get('id_rol') != 745) return redirect()->to(base_url('admin/dashboard'));

        $usuarioModel = new UsuarioModel();
        
        $data = [
            'nombre_usuario'   => $this->request->getPost('nombre_usuario'),
            'ap_usuario'       => $this->request->getPost('ap_usuario'),
            'am_usuario'       => $this->request->getPost('am_usuario'),
            'sexo_usuario'     => $this->request->getPost('sexo_usuario'),
            'email_usuario'    => $this->request->getPost('email_usuario'),
            // Encriptamos la contraseña tal como lo pide tu BD (SHA256)
            'password_usuario' => hash('sha256', $this->request->getPost('password_usuario')),
            'id_rol'           => $this->request->getPost('id_rol'),
            'estatus_usuario'  => 1 // Habilitado por defecto
        ];

        $usuarioModel->insert($data);
        return redirect()->to(base_url('admin/usuarios'))->with('mensaje', 'Usuario registrado exitosamente.');
    }

    public function actualizar() {
        if (session()->get('id_rol') != 745) return redirect()->to(base_url('admin/dashboard'));

        $usuarioModel = new UsuarioModel();
        $id_usuario = $this->request->getPost('id_usuario');
        
        $data = [
            'nombre_usuario'  => $this->request->getPost('nombre_usuario'),
            'ap_usuario'      => $this->request->getPost('ap_usuario'),
            'am_usuario'      => $this->request->getPost('am_usuario'),
            'sexo_usuario'    => $this->request->getPost('sexo_usuario'),
            'email_usuario'   => $this->request->getPost('email_usuario'),
            'id_rol'          => $this->request->getPost('id_rol'),
            'estatus_usuario' => $this->request->getPost('estatus_usuario')
        ];

        // Si escribieron una nueva contraseña, la actualizamos. Si está vacío, se queda la anterior.
        $nueva_password = $this->request->getPost('password_usuario');
        if (!empty($nueva_password)) {
            $data['password_usuario'] = hash('sha256', $nueva_password);
        }

        $usuarioModel->update($id_usuario, $data);
        return redirect()->to(base_url('admin/usuarios'))->with('mensaje', 'Usuario actualizado correctamente.');
    }
}