<?php

namespace App\Controllers;
use App\Models\StreamingModel;
use App\Models\GeneroModel;

class Streaming extends BaseController
{
    private function verificarAcceso()
    {
        if (session()->get('id_rol') != 745) return false;
        return true;
    }

    public function index()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $streamingModel = new StreamingModel();
        
        // Traemos todos los streamings e incluimos el nombre del género haciendo un JOIN
        $datos['streamings'] = $streamingModel->select('streaming.*, generos.nombre_genero')
                                              ->join('generos', 'generos.id_genero = streaming.id_genero')
                                              ->orderBy('id_streaming', 'DESC')
                                              ->findAll();
                                              
        return view('admin/streaming/index', $datos);
    }

    public function crear()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $generoModel = new GeneroModel();
        // Le pasamos los géneros habilitados a la vista para llenar el <select>
        $datos['generos'] = $generoModel->where('estatus_genero', 1)->findAll();
        
        return view('admin/streaming/crear', $datos);
    }

   public function guardar()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $streamingModel = new StreamingModel();
        
        // Recogemos los valores
        $duracion = $this->request->getPost('duracion_streaming');
        $temporadas = $this->request->getPost('temporadas_streaming');

        // LÓGICA DE LIMPIEZA: Si hay temporadas, anulamos la duración para que sea Serie pura
        if (!empty($temporadas) && $temporadas > 0) {
            $duracion = null;
        }

        $datos = [
            'nombre_streaming'            => $this->request->getPost('nombre_streaming'),
            'fecha_lanzamiento_streaming' => $this->request->getPost('fecha_lanzamiento_streaming'),
            'fecha_estreno_streaming'     => $this->request->getPost('fecha_estreno_streaming'),
            'duracion_streaming'          => $duracion ?: null,
            'temporadas_streaming'        => $temporadas ?: null,
            'caratula_streaming'          => $this->request->getPost('caratula_streaming'),
            'trailer_streaming'           => $this->request->getPost('trailer_streaming'),
            'clasificacion_streaming'     => $this->request->getPost('clasificacion_streaming'),
            'sipnosis_streaming'          => $this->request->getPost('sipnosis_streaming'),
            'id_genero'                   => $this->request->getPost('id_genero'),
            'estatus_streaming'           => 1 
        ];

        $streamingModel->insert($datos);
        return redirect()->to(base_url('admin/streaming'))->with('mensaje', 'Título agregado correctamente.');
    }

    // Cambiar estatus (Habilitar / Deshabilitar)
    public function cambiar_estatus($id = null, $estatus = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $streamingModel = new StreamingModel();
        $streamingModel->update($id, ['estatus_streaming' => $estatus]);
        return redirect()->to(base_url('admin/streaming'));
    }
    // --- 1. Mostrar formulario para EDITAR ---
    public function editar($id = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $streamingModel = new StreamingModel();
        $generoModel = new GeneroModel();
        
        $streaming = $streamingModel->find($id);
        
        if (!$streaming) {
            return redirect()->to(base_url('admin/streaming'))->with('error', 'El título no existe.');
        }

        $datos = [
            'streaming' => $streaming,
            'generos'   => $generoModel->where('estatus_genero', 1)->findAll()
        ];
        
        return view('admin/streaming/editar', $datos);
    }

   public function actualizar($id = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $streamingModel = new StreamingModel();
        
        $duracion = $this->request->getPost('duracion_streaming');
        $temporadas = $this->request->getPost('temporadas_streaming');

        // LÓGICA DE LIMPIEZA: Priorizamos temporadas sobre duración
        if (!empty($temporadas) && $temporadas > 0) {
            $duracion = null;
        }

        $datos = [
            'nombre_streaming'            => $this->request->getPost('nombre_streaming'),
            'fecha_lanzamiento_streaming' => $this->request->getPost('fecha_lanzamiento_streaming'),
            'fecha_estreno_streaming'     => $this->request->getPost('fecha_estreno_streaming'),
            'duracion_streaming'          => $duracion ?: null,
            'temporadas_streaming'        => $temporadas ?: null,
            'caratula_streaming'          => $this->request->getPost('caratula_streaming'),
            'trailer_streaming'           => $this->request->getPost('trailer_streaming'),
            'clasificacion_streaming'     => $this->request->getPost('clasificacion_streaming'),
            'sipnosis_streaming'          => $this->request->getPost('sipnosis_streaming'),
            'id_genero'                   => $this->request->getPost('id_genero')
        ];

        $streamingModel->update($id, $datos);
        return redirect()->to(base_url('admin/streaming'))->with('mensaje', 'Título actualizado correctamente.');
    }

    public function eliminar($id = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $streamingModel = new StreamingModel();
        $streamingModel->delete($id);
        
        return redirect()->to(base_url('admin/streaming'))->with('mensaje', 'Título eliminado permanentemente.');
    }
}