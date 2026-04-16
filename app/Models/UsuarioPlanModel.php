<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuarioPlanModel extends Model
{
    protected $table      = 'usuarios_planes'; // Con la "s"
    protected $primaryKey = 'id_usuario_plan';
    
    // ESTO ES LO MÁS IMPORTANTE: Deben coincidir con tu imagen de phpMyAdmin
    protected $allowedFields = [
        'id_usuario', 
        'id_plan', 
        'fecha_registro_plan', // Corregido según tu imagen
        'fecha_fin_plan',      // Corregido según tu imagen
        'estatus_usuario_plan' 
    ];
}