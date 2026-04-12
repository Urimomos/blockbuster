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
}