<?php

namespace App\Controllers;
use App\Models\PagoModel;

class Pagos extends BaseController
{
    public function index()
    {
        // Solo Administradores (745) y Operadores (125)
        if (!in_array(session()->get('id_rol'), [745, 125])) {
            return redirect()->to(base_url('admin/dashboard'));
        }

        $db = \Config\Database::connect();
        $builder = $db->table('pagos');
        
        // Unimos con usuarios y planes usando TUS nombres de columna
        $builder->select('pagos.*, usuarios.nombre_usuario, usuarios.ap_usuario, planes.nombre_plan');
        $builder->join('usuarios', 'usuarios.id_usuario = pagos.id_usuario', 'left');
        $builder->join('planes', 'planes.id_plan = pagos.id_plan', 'left');
        $builder->orderBy('pagos.fecha_registro_pago', 'DESC');
        
        $datos['pagos'] = $builder->get()->getResultArray();

        return view('admin/pagos/index', $datos);
    }

public function cambiar_estatus($id_pago = null, $estatus = null)
    {
        $db = \Config\Database::connect();

        // 1. Buscamos el pago directamente en la tabla
        $pago = $db->table('pagos')->where('id_pago', $id_pago)->get()->getRowArray();

        if ($pago) {
            // 2. Obligamos a actualizar el pago
            $db->table('pagos')
               ->where('id_pago', $id_pago)
               ->update(['estatus_pago' => $estatus]);

            // 3. Obligamos a actualizar el plan del usuario
            $db->table('usuarios_planes')
               ->where('id_usuario', $pago['id_usuario'])
               ->where('id_plan', $pago['id_plan'])
               // ->where('estatus_usuario_plan', 0) // Quitamos esta condición para forzarlo
               ->update(['estatus_usuario_plan' => $estatus]);
            
            return redirect()->to(base_url('admin/pagos'))->with('mensaje', '¡Aprobación forzada con éxito!');
        }

        return redirect()->to(base_url('admin/pagos'))->with('error', 'Error: Pago no encontrado.');
    }
}