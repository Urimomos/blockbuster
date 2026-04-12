<?php

namespace App\Controllers;
use App\Models\StreamingModel;

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
}