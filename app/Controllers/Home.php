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

        // Le enviamos el arreglo $datos a la vista
        return view('index', $datos);
    }

    public function buscar()
    {
        // 1. Atrapamos lo que el usuario escribió en el buscador (la variable 'q')
        $palabra = $this->request->getGet('q');

        // 2. Aquí es donde en el futuro llamarás a tu Modelo para buscar en la Base de Datos
        // Ejemplo: $resultados = $peliculaModel->like('titulo', $palabra)->findAll();

        // 3. Empaquetamos la palabra para mandarla a la vista
        $data = [
            'termino_busqueda' => $palabra
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

        return view('planes_publico', $datos);
    }
}