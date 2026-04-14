<?php
namespace App\Controllers;
use App\Models\GeneroModel;

class Generos extends BaseController {
    
    public function index() {
        $model = new GeneroModel();
        $datos = ['generos' => $model->findAll()];
        return view('admin/generos/index', $datos);
    }

    public function guardar() {
        $model = new GeneroModel();
        
        $model->insert([
            'nombre_genero'      => $this->request->getPost('nombre_genero'),
            'descripcion_genero' => $this->request->getPost('descripcion_genero'),
            'estatus_genero'     => 1 // 1 = Habilitado
        ]);
        
        return redirect()->to(base_url('admin/generos'))->with('mensaje', 'Género creado correctamente.');
    }

    public function actualizar() {
        $model = new GeneroModel();
        $id = $this->request->getPost('id_genero');
        
        $model->update($id, [
            'nombre_genero'      => $this->request->getPost('nombre_genero'),
            'descripcion_genero' => $this->request->getPost('descripcion_genero'),
            'estatus_genero'     => $this->request->getPost('estatus_genero')
        ]);
        
        return redirect()->to(base_url('admin/generos'))->with('mensaje', 'Género actualizado correctamente.');
    }
}