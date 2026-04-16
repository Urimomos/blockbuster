<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Clientes extends BaseController
{
    private function verificarAcceso()
    {
        // Candado: Solo entran Operadores (125) o Administradores (745)
        $rol = session()->get('id_rol');
        if ($rol != 125 && $rol != 745) return false;
        return true;
    }

    public function index()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $usuarioModel = new UsuarioModel();
        
        // La regla de oro: Solo traemos a los que son Clientes (id_rol = 58)
        $datos['clientes'] = $usuarioModel->where('id_rol', 58)->findAll();

        return view('admin/clientes/index', $datos);
    }

    public function actualizar()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $usuarioModel = new UsuarioModel();
        $id = $this->request->getPost('id_usuario');

        $datos = [
            'nombre_usuario' => $this->request->getPost('nombre_usuario'),
            'ap_usuario'     => $this->request->getPost('ap_usuario'),
            'am_usuario'     => $this->request->getPost('am_usuario'),
            'email_usuario'  => $this->request->getPost('email_usuario')
        ];

        // Si el operador le resetea la contraseña porque el cliente la olvidó
        $password = $this->request->getPost('password_usuario');
        if (!empty($password)) {
            $datos['password_usuario'] = hash('sha256', $password);
        }

        $usuarioModel->update($id, $datos);
        return redirect()->to(base_url('admin/clientes'))->with('mensaje', 'Datos del cliente actualizados.');
    }

    // Suspender o Activar cuenta
    public function cambiar_estatus($id = null, $estatus = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $usuarioModel = new UsuarioModel();
        $usuarioModel->update($id, ['estatus_usuario' => $estatus]);
        
        return redirect()->to(base_url('admin/clientes'))->with('mensaje', 'Estatus de la cuenta actualizado.');
    }
}