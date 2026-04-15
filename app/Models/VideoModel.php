<?php

namespace App\Models;
use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table      = 'videos';
    protected $primaryKey = 'id_video';
    
    // Todos los campos que permitimos guardar en la base de datos
    protected $allowedFields = [
        'estatus_video', 
        'video', 
        'nombre_temporada', 
        'video_temporada', 
        'capitulo_temporada', 
        'descripcion_capitulo_temporada', 
        'id_streaming'
    ];
}