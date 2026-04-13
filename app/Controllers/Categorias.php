<?php

namespace App\Controllers;
use App\Models\StreamingModel;

class Categorias extends BaseController
{
    public function peliculas()
    {
        // Encendemos el helper de texto para la función word_limiter() de las sinopsis
        helper('text'); 
        $streamingModel = new StreamingModel();

        // Extraemos los datos y configuramos el título
        $datos = [
            'titulo_categoria' => 'CATÁLOGO DE PELÍCULAS',
            // Le pasamos 0 al límite para que traiga TODAS las películas de la base de datos
            'items'            => $streamingModel->getPeliculas(0) 
        ];

        // Enviamos los datos a la vista "molde" que armamos
        return view('categories', $datos);
    }

    public function series()
    {
        helper('text');
        $streamingModel = new StreamingModel();

        $datos = [
            'titulo_categoria' => 'CATÁLOGO DE SERIES',
            // Traemos TODAS las series
            'items'            => $streamingModel->getSeries(0)
        ];

        return view('categories', $datos);
    }
}