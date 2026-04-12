<?php

namespace App\Models;
use CodeIgniter\Model;

class StreamingModel extends Model
{
    protected $table      = 'streaming';
    protected $primaryKey = 'id_streaming';
    protected $allowedFields = [
        'estatus_streaming', 'nombre_streaming', 'fecha_lanzamiento_streaming', 
        'duracion_streaming', 'temporadas_streaming', 'caratula_streaming', 
        'trailer_streaming', 'clasificacion_streaming', 'sipnosis_streaming', 
        'fecha_estreno_streaming', 'id_genero'
    ];

    // Función para obtener los streaming habilitados con su nombre de género
    public function getStreamingHabilitados($limite = 6)
    {
        return $this->select('streaming.*, generos.nombre_genero')
                    ->join('generos', 'generos.id_genero = streaming.id_genero')
                    ->where('estatus_streaming', 1)
                    ->orderBy('id_streaming', 'DESC') // Los más recientes primero
                    ->findAll($limite);
    }

    // Función para obtener solo películas (duracion_streaming no es null)
    public function getPeliculas($limite = 6)
    {
        return $this->select('streaming.*, generos.nombre_genero')
                    ->join('generos', 'generos.id_genero = streaming.id_genero')
                    ->where('estatus_streaming', 1)
                    ->where('temporadas_streaming IS NULL')
                    ->orderBy('fecha_estreno_streaming', 'DESC')
                    ->findAll($limite);
    }

    // Función para obtener solo series (temporadas_streaming no es null)
    public function getSeries($limite = 6)
    {
        return $this->select('streaming.*, generos.nombre_genero')
                    ->join('generos', 'generos.id_genero = streaming.id_genero')
                    ->where('estatus_streaming', 1)
                    ->where('temporadas_streaming IS NOT NULL')
                    ->orderBy('fecha_estreno_streaming', 'DESC')
                    ->findAll($limite);
    }
}