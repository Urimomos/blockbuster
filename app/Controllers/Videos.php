<?php

namespace App\Controllers;
use App\Models\VideoModel;
use App\Models\StreamingModel;

class Videos extends BaseController
{
    private function verificarAcceso()
    {
        if (session()->get('id_rol') != 745) return false;
        return true;
    }

    public function index()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));
        $videoModel = new VideoModel();
        $datos['videos'] = $videoModel->select('videos.*, streaming.nombre_streaming, streaming.temporadas_streaming')
                                      ->join('streaming', 'streaming.id_streaming = videos.id_streaming')
                                      ->orderBy('videos.id_video', 'DESC')
                                      ->findAll();
        return view('admin/videos/index', $datos);
    }

    // --- NUEVO: Mostrar Formulario de Creación ---
    public function crear()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));
        $streamingModel = new StreamingModel();
        // Necesitamos la lista de pelis/series para el select
        $datos['streamings'] = $streamingModel->where('estatus_streaming', 1)->findAll();
        return view('admin/videos/crear', $datos);
    }

    // --- NUEVO: Guardar en la BD ---
    public function guardar()
    {
        $videoModel = new VideoModel();
        $datos = [
            'video'             => $this->request->getPost('video'),
            'nombre_temporada'  => $this->request->getPost('nombre_temporada') ?: null,
            'video_temporada'   => $this->request->getPost('video_temporada') ?: null,
            'capitulo_temporada'=> $this->request->getPost('capitulo_temporada') ?: null,
            'descripcion_capitulo_temporada' => $this->request->getPost('descripcion_capitulo_temporada'),
            'id_streaming'      => $this->request->getPost('id_streaming'),
            'estatus_video'     => 1
        ];
        $videoModel->insert($datos);
        return redirect()->to(base_url('admin/videos'))->with('mensaje', 'Video subido correctamente.');
    }

    // --- NUEVO: Mostrar Formulario de Edición ---
    public function editar($id = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));
        $videoModel = new VideoModel();
        $streamingModel = new StreamingModel();
        
        $datos['video_data'] = $videoModel->find($id);
        $datos['streamings'] = $streamingModel->where('estatus_streaming', 1)->findAll();
        
        return view('admin/videos/editar', $datos);
    }

    // --- NUEVO: Procesar la Actualización ---
    public function actualizar($id = null)
    {
        $videoModel = new VideoModel();
        $datos = [
            'video'             => $this->request->getPost('video'),
            'nombre_temporada'  => $this->request->getPost('nombre_temporada') ?: null,
            'video_temporada'   => $this->request->getPost('video_temporada') ?: null,
            'capitulo_temporada'=> $this->request->getPost('capitulo_temporada') ?: null,
            'descripcion_capitulo_temporada' => $this->request->getPost('descripcion_capitulo_temporada'),
            'id_streaming'      => $this->request->getPost('id_streaming')
        ];
        $videoModel->update($id, $datos);
        return redirect()->to(base_url('admin/videos'))->with('mensaje', 'Video actualizado.');
    }

    public function cambiar_estatus($id = null, $estatus = null)
    {
        $videoModel = new VideoModel();
        $videoModel->update($id, ['estatus_video' => $estatus]);
        return redirect()->to(base_url('admin/videos'));
    }

    public function eliminar($id = null)
    {
        $videoModel = new VideoModel();
        $videoModel->delete($id);
        return redirect()->to(base_url('admin/videos'))->with('mensaje', 'Video eliminado.');
    }
}