<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['estatus_usuario', 'nombre_usuario', 'ap_usuario', 'am_usuario', 'sexo_usuario', 'email_usuario', 'password_usuario', 'imagen_usuario', 'id_rol'];

    // Cambié el nombre de la variable $email a $identificador porque ahora puede ser usuario o correo
    // Y le puse $passwordHashed para recordar que ya viene encriptada desde el controlador
    public function validarUsuario($identificador, $passwordHashed)
    {
        $this->select('usuarios.*, roles.nombre_rol');
        $this->join('roles', 'roles.id_rol = usuarios.id_rol');
        
        // Agrupamos la búsqueda para decirle: "Busca en email_usuario O en nombre_usuario"
        $this->groupStart()
             ->where('email_usuario', $identificador)
             ->orWhere('nombre_usuario', $identificador)
             ->groupEnd();
        
        // Le quitamos el hash() extra porque el Controlador ya lo hizo
        $this->where('password_usuario', $passwordHashed);
        
        // Aseguramos que la cuenta esté activa
        $this->where('estatus_usuario', 1);
        
        return $this->first();
    }
}