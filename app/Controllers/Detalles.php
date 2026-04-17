<?php

namespace App\Controllers;
use App\Models\StreamingModel;

class Detalles extends BaseController
{
    public function index($id_streaming = null)
    {
        $streamingModel = new StreamingModel();

        // 1. Buscamos los datos de la película/serie seleccionada y su género
        $item = $streamingModel->select('streaming.*, generos.nombre_genero')
                               ->join('generos', 'generos.id_genero = streaming.id_genero', 'left')
                               ->where('id_streaming', $id_streaming)
                               ->where('estatus_streaming', 1)
                               ->first();

        // Si por alguna razón el ID no existe, lo regresamos al inicio con un error
        if (!$item) {
            return redirect()->to(base_url('/'))->with('error', 'El título que buscas no se encuentra disponible.');
        }

        // 2. Buscamos 4 títulos recomendados del mismo género (excluyendo el que estamos viendo)
        $recomendados = $streamingModel->where('id_genero', $item['id_genero'])
                                       ->where('id_streaming !=', $id_streaming)
                                       ->where('estatus_streaming', 1)
                                       ->orderBy('id_streaming', 'RANDOM')
                                       ->findAll(4);

        // 3. Traemos las películas alquiladas y ACTIVAS del usuario actual para el botón
        $mis_alquileres = [];
        if (session()->get('is_logged_in')) {
            $db = \Config\Database::connect();
            
            $alquileres_activos = $db->table('alquileres')
                                     ->select('id_streaming')
                                     ->where('id_usuario', session()->get('id_usuario'))
                                     ->where('estatus_alquiler', 1) // Activos
                                     ->where('fecha_fin_alquiler >=', date('Y-m-d'))
                                     ->get()
                                     ->getResultArray();
            
            $mis_alquileres = array_column($alquileres_activos, 'id_streaming');
        }

        $datos = [
            'item'         => $item,
            'recomendados' => $recomendados,
            'mis_alquileres' => $mis_alquileres
        ];

        return view('streaming_detalles', $datos);
    }
}