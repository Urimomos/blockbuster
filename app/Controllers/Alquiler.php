<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Alquiler extends BaseController
{
    public function procesar($id_streaming)
    {
        $id_usuario = session()->get('id_usuario');
        if (!$id_usuario) return redirect()->to(base_url('login'))->with('error', 'Debes iniciar sesión para alquilar.');

        $db = \Config\Database::connect();
        $usuario = $db->table('usuarios')->where('id_usuario', $id_usuario)->get()->getRowArray();

        if ($usuario['alquileres_restantes'] <= 0) {
            return redirect()->back()->with('error', 'Tus alquileres se han agotado. ¡Renueva tu plan!');
        }

        $ya_alquilado = $db->table('alquileres')
                           ->where(['id_usuario' => $id_usuario, 'id_streaming' => $id_streaming, 'estatus_alquiler' => 1])
                           ->where('fecha_fin_alquiler >=', date('Y-m-d'))
                           ->countAllResults();

        if ($ya_alquilado == 0) {
            // Restar alquiler y registrar
            $db->table('usuarios')->where('id_usuario', $id_usuario)->update(['alquileres_restantes' => $usuario['alquileres_restantes'] - 1]);
            $db->table('alquileres')->insert([
                'id_usuario' => $id_usuario, 'id_streaming' => $id_streaming, 
                'fecha_inicio_alquiler' => date('Y-m-d'), 'fecha_fin_alquiler' => date('Y-m-d', strtotime('+2 days')), 'estatus_alquiler' => 1
            ]);
            session()->set('alquileres_restantes', $usuario['alquileres_restantes'] - 1);
            
            // ¡AQUÍ ESTÁ EL CAMBIO! Ahora te redirige a la pantalla del reproductor
            return redirect()->to('/ver-pelicula/' . $id_streaming)->with('mensaje', '¡Alquiler exitoso! Disfruta tu título.');
        }

        return redirect()->back()->with('error', 'Ya tienes esta película alquilada.');
    }

    // NUEVA FUNCIÓN: Pantalla del Reproductor
    public function ver($id_streaming)
    {
        $id_usuario = session()->get('id_usuario');
        if (!$id_usuario) return redirect()->to(base_url('login'));

        $db = \Config\Database::connect();
        
        // Verificamos de forma estricta que tenga la película alquilada y activa
        $alquilerActivo = $db->table('alquileres')
            ->where(['id_usuario' => $id_usuario, 'id_streaming' => $id_streaming, 'estatus_alquiler' => 1])
            ->where('fecha_fin_alquiler >=', date('Y-m-d'))
            ->countAllResults();

        if ($alquilerActivo == 0) {
            return redirect()->to(base_url('/'))->with('error', 'No tienes acceso a esta película o tu alquiler caducó.');
        }

        // Traemos los datos de la película para el reproductor
        $datos['pelicula'] = $db->table('streaming')->where('id_streaming', $id_streaming)->get()->getRowArray();

        return view('reproductor', $datos);
    }
}