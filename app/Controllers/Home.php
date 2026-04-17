<?php

namespace App\Controllers;
use App\Models\StreamingModel;
use App\Models\PlanModel; // <-- IMPORTAMOS EL MODELO AQUÍ

class Home extends BaseController
{
    public function index()
    {
         helper('text'); 

        $streamingModel = new StreamingModel();

        // Extraemos los datos de la base de datos
        $datos = [
            // Traemos 6 agregados recientemente
            'recientes' => $streamingModel->getStreamingHabilitados(6), 
            // Traemos 6 películas
            'peliculas' => $streamingModel->getPeliculas(6),
            // Traemos 6 series
            'series'    => $streamingModel->getSeries(6)
        ];

        // Traemos las películas alquiladas y ACTIVAS del usuario actual
        $datos['mis_alquileres'] = [];
        if (session()->get('is_logged_in')) {
            $db = \Config\Database::connect();
            
            $alquileres = $db->table('alquileres')
                             ->select('id_streaming')
                             ->where('id_usuario', session()->get('id_usuario'))
                             ->where('estatus_alquiler', 1) // Activos
                             ->where('fecha_fin_alquiler >=', date('Y-m-d'))
                             ->get()
                             ->getResultArray();
            
            $datos['mis_alquileres'] = array_column($alquileres, 'id_streaming');
        }

        // Le enviamos el arreglo $datos a la vista
        return view('index', $datos);
    }

    public function buscar()
    {
        // 1. Atrapamos lo que el usuario escribió en el buscador (la variable 'q')
        $palabra = $this->request->getGet('q');

        $streamingModel = new StreamingModel();
        $resultados = [];
        
        if (!empty($palabra)) {
            $resultados = $streamingModel->select('streaming.*, generos.nombre_genero')
                                         ->join('generos', 'generos.id_genero = streaming.id_genero', 'left')
                                         ->where('estatus_streaming', 1)
                                         ->groupStart()
                                            ->like('nombre_streaming', $palabra)
                                            ->orLike('sipnosis_streaming', $palabra)
                                         ->groupEnd()
                                         ->findAll();
        }

        $data = [
            'termino_busqueda' => $palabra,
            'resultados'       => $resultados
        ];

        // 4. Mostramos la página de resultados
        return view('resultados_busqueda', $data);
    }

    public function planes()
    {
        // Instanciamos el modelo de manera limpia
        $planModel = new PlanModel();
        
        // Traemos solo los planes que estén habilitados (1)
        $datos = [
            'planes' => $planModel->where('estatus_plan', 1)->findAll()
        ];
        // Traemos las películas alquiladas y ACTIVAS del usuario actual
        $datos['mis_alquileres'] = [];
        if (session()->get('is_logged_in')) {
            $db = \Config\Database::connect();
            
            $alquileres = $db->table('alquileres')
                             ->select('id_streaming')
                             ->where('id_usuario', session()->get('id_usuario'))
                             ->where('estatus_alquiler', 1) // Solo las que están "En proceso"
                             ->where('fecha_fin_alquiler >=', date('Y-m-d')) // Que no estén vencidas
                             ->get()
                             ->getResultArray();
            
            // Lo convertimos en un arreglo simple, ej: [1, 5, 8]
            $datos['mis_alquileres'] = array_column($alquileres, 'id_streaming');
        }

        return view('planes_publico', $datos);
    }
}