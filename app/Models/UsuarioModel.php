<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['estatus_usuario', 'nombre_usuario', 'ap_usuario', 'am_usuario', 'sexo_usuario', 'email_usuario', 'password_usuario', 'imagen_usuario', 'id_rol'];

    // Función específica para el Login
    public function validarUsuario($email, $password)
    {
        
        $this->select('usuarios.*, roles.nombre_rol');
        $this->join('roles', 'roles.id_rol = usuarios.id_rol');
        
        $this->where('email_usuario', $email);
        $this->where('password_usuario', hash('sha256', $password));
        $this->where('estatus_usuario', 1);
        
        return $this->first();
    }
}