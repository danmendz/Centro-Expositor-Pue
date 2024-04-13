<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;
use App\Models\Area;
use App\Models\Cajon;

class LoginApiController extends Controller
{
    public function obtenerUsuario(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'pass' => 'required|string|min:6',
        ]);
    
        // Recuperar los datos de la solicitud
        $email = $request->input('email');
        $password = $request->input('pass');
    
        // Buscar al usuario por su correo electrónico y contraseña
        $usuarioRecuperado = User::where('email', $email)->first();
    
        // Verificar si se encontró al usuario y verificar su contraseña
        if ($usuarioRecuperado && password_verify($password, $usuarioRecuperado->password)) {
    
            // Devolver la respuesta exitosa con los datos del usuario y sus eventos
            return response()->json([
                'usuario' => $usuarioRecuperado,
            ], 200);
        } else {
            // Devolver una respuesta de error si el usuario no fue encontrado o la contraseña es incorrecta
            return response()->json(['error' => 'Credenciales inválidas'], 403);
        }

        // URL: http://localhost:8000/obtener-usuario-eventos?email=cliente@gmail.com&pass=password
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

        // URL: http://localhost:8000/obtener-usuario-eventos?email=cliente@gmail.com&pass=password
    }
}
