<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index'); // Tu página de inicio principal
    }

    public function peliculas()
    {
        // AQUÍ ESTÁ LA MAGIA: Le decimos que use tu archivo existente
        return view('categories'); 
    }

    public function series()
    {
        // Este será el archivo nuevo
        return view('series'); 
    }
}