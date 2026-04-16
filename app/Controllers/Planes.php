<?php

namespace App\Controllers;
use App\Models\PlanModel;

class Planes extends BaseController
{
    // Verifica que sea administrador
    private function verificarAcceso()
    {
        if (session()->get('id_rol') != 745) {
            return false;
        }
        return true;
    }

    // 1. Mostrar la lista (El que ya teníamos)
    public function index()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $planModel = new PlanModel();
        $datos = ['planes' => $planModel->findAll()];
        return view('admin/planes/index', $datos);
    }

    // 2. Mostrar formulario para CREAR
    public function crear()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));
        return view('admin/planes/crear');
    }

    // 3. Procesar el formulario de CREAR y guardar en BD
    public function guardar()
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $planModel = new PlanModel();
        
        $datos = [
            'nombre_plan'          => $this->request->getPost('nombre_plan'),
            'precio_plan'          => $this->request->getPost('precio_plan'),
            'cantidad_limite_plan' => $this->request->getPost('cantidad_limite_plan'),
            'tipo_plan'            => $this->request->getPost('tipo_plan'),
            'estatus_plan'         => 1 // Por defecto al crear, lo habilitamos
        ];

        $planModel->insert($datos);
        return redirect()->to(base_url('admin/planes'))->with('mensaje', 'Plan creado exitosamente.');
    }

    // 4. Mostrar formulario para EDITAR
    public function editar($id = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $planModel = new PlanModel();
        $plan = $planModel->find($id);

        if (!$plan) {
            return redirect()->to(base_url('admin/planes'))->with('error', 'El plan no existe.');
        }

        $datos = ['plan' => $plan];
        return view('admin/planes/editar', $datos);
    }

    // 5. Procesar formulario de EDITAR y actualizar en BD
    public function actualizar($id = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $planModel = new PlanModel();
        
        $datos = [
            'nombre_plan'          => $this->request->getPost('nombre_plan'),
            'precio_plan'          => $this->request->getPost('precio_plan'),
            'cantidad_limite_plan' => $this->request->getPost('cantidad_limite_plan'),
            'tipo_plan'            => $this->request->getPost('tipo_plan')
        ];

        $planModel->update($id, $datos);
        return redirect()->to(base_url('admin/planes'))->with('mensaje', 'Plan actualizado correctamente.');
    }

    // 6. Cambiar estatus (Habilitar 1 / Deshabilitar -1)
    public function cambiar_estatus($id = null, $estatus = null)
    {
        if (!$this->verificarAcceso()) return redirect()->to(base_url('admin/dashboard'));

        $planModel = new PlanModel();
        $planModel->update($id, ['estatus_plan' => $estatus]);
        
        return redirect()->to(base_url('admin/planes'));
    }
    public function eliminar($id = null)
    {
        if (session()->get('id_rol') != 745) return redirect()->to(base_url('admin/dashboard'));
        
        $planesModel = new \App\Models\PlanesModel(); // Asegúrate de que así se llame tu modelo de planes
        $planesModel->delete($id);
        
        return redirect()->to(base_url('admin/planes'))->with('mensaje', 'Plan eliminado permanentemente.');
    }
}