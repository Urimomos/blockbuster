<?php

namespace App\Controllers;
use App\Models\PlanModel;
use App\Models\PagoModel;
use App\Models\UsuarioPlanModel;

class Checkout extends BaseController
{
    public function index($id_plan)
    {
        // Seguridad: Solo usuarios logueados pueden entrar aquí
        if (!session()->get('is_logged_in')) {
            return redirect()->to(base_url('login'))->with('error', 'Debes iniciar sesión para comprar un plan.');
        }

        $planModel = new PlanModel();
        $plan = $planModel->find($id_plan);

        if (!$plan) {
            return redirect()->to(base_url('planes'))->with('error', 'El plan seleccionado no existe.');
        }

        $datos = [
            'plan' => $plan
        ];

        return view('checkout', $datos);
    }

   public function procesar()
{
    if (!session()->get('is_logged_in')) return redirect()->to(base_url('login'));

    $id_usuario = session()->get('id_usuario');
    $id_plan = $this->request->getPost('id_plan');
    $tarjeta = $this->request->getPost('tarjeta_pago');

    $planModel = new PlanModel();
    $pagoModel = new PagoModel();
    $usuarioPlanModel = new UsuarioPlanModel();

    $plan = $planModel->find($id_plan);
    $fecha_actual = date('Y-m-d');

    // Cálculo de fechas (igual que antes)
    $fecha_fin = '';
    if ($plan['tipo_plan'] == 8) { $fecha_fin = date('Y-m-d', strtotime($fecha_actual . ' + 7 days')); }
    elseif ($plan['tipo_plan'] == 16) { $fecha_fin = date('Y-m-d', strtotime($fecha_actual . ' + 1 month')); }
    elseif ($plan['tipo_plan'] == 32) { $fecha_fin = date('Y-m-d', strtotime($fecha_actual . ' + 1 year')); }

    $tarjeta_oculta = str_repeat('X', 12) . substr($tarjeta, -4);

    // 1. Guardar el Pago como PENDIENTE (estatus_pago = 0)
    $pagoModel->insert([
        'fecha_registro_pago' => $fecha_actual,
        'estatus_pago'        => 0, // CAMBIO: Inicia en 0
        'monto_pago'          => $plan['precio_plan'],
        'tarjeta_pago'        => $tarjeta_oculta,
        'id_usuario'          => $id_usuario,
        'id_plan'             => $id_plan
    ]);

    // 2. Asignar el plan al usuario como PENDIENTE
    // Asegúrate de tener la columna 'estatus_usuario_plan' en tu tabla usuarios_planes
    $usuarioPlanModel->insert([
        'fecha_registro_plan' => $fecha_actual,
        'fecha_fin_plan'      => $fecha_fin,
        'id_usuario'          => $id_usuario,
        'id_plan'             => $id_plan,
        'estatus_usuario_plan' => 0 // CAMBIO: Inicia en 0
    ]);

    return redirect()->to(base_url('perfil'))->with('mensaje_exito', 'Tu pago está siendo procesado por un operador.');
}
}