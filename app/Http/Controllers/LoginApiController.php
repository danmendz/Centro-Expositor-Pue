<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;
use App\Models\Area;
use App\Models\Cajon;
use Illuminate\Support\Facades\DB;

class LoginApiController extends Controller
{
    public function obtenerUsuario(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'pass' => 'required|string|min:6',
        ]);
    
        $email = $request->input('email');
        $password = $request->input('pass');
    
        $usuarioRecuperado = User::where('email', $email)->first();
    
        if ($usuarioRecuperado && password_verify($password, $usuarioRecuperado->password)) {
    
            return response()->json([
                'usuario' => $usuarioRecuperado,
            ], 200);
        } else {
            return response()->json(['error' => 'Credenciales inválidas'], 403);
        }

        // http://localhost:8000/obtener-usuario?email=cliente@gmail.com&pass=password
        // https://astratech.shop/obtener-usuario?email=cliente@gmail.com&pass=password
    }

    public function obtenerEventos(Request $request)
    {

        $request->validate([
            'id' => 'required|integer',
        ]);
    
        $idUsuario = $request->input('id');
    
        $eventosUsuario = Evento::where('id_usuario', $idUsuario)
            ->where('estatus', 'aprobado')
            ->get();

        $areas = [];
        $cajones = [];

        if ($eventosUsuario) {
            // Iterar sobre los eventos del usuario
            foreach ($eventosUsuario as $eventoUsuario) {
                $eventoId = $eventoUsuario->id;
        
                // Obtener áreas del evento
                $areasEvento = Area::where('id_evento', $eventoId)->get();
                $areas[$eventoId] = $areasEvento->toArray();
        
                // Iterar sobre las áreas del evento
                foreach ($areasEvento as $areaE) {
                    $areaId = $areaE->id;
        
                    // Obtener cajones del área
                    $cajonesArea = Cajon::where('id_area', $areaId)->get();
                    $cajones[$areaId] = $cajonesArea->toArray();
                }
            }
        
            $response = [
                'eventos' => $eventosUsuario,
                'areas' => $areas,
                'cajones' => $cajones,
            ];

            return response()->json($response, 200);
        } 
        else {
            return response()->json(['error' => 'Eventos no encontrados'], 403);
        }

        // http://localhost:8000/obtener-eventos?id=2
        // https://astratech.shop/obtener-eventos?id=2
    }

    public function actualizarEstatus(Request $request)
    {
        $request->validate([
            'id' => 'required|integer',
            'estat' => 'required|integer',
        ]);
    
        $idCajon = $request->input('id');
        $estatus = $request->input('estat');
            
        try {
            DB::statement("UPDATE cajons SET estatus = ? WHERE id = ?", [$estatus, $idCajon]);
            
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Se produjo un error al actualizar estatus: ' . $th->getMessage()], 500);
        }        
        // http://localhost:8000/actualizar-estatus
        // https://astratech.shop/actualizar-estatus

        // {
        //     "id": 2,
        //     "estat": 1
        // }
    }
}
