<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    //
    public function getData(Request $request)
    {
        $dia = $request->input('dia');
        $hora_inicio = $request->input('hora_inicio');
        $hora_fin = $request->input('hora_fin');

        // Llamar al procedimiento almacenado y obtener el porcentaje de disponibilidad
        $disponibilidad = DB::select('CALL obtener_disponibilidad(?, ?, ?)', [$dia, $hora_inicio, $hora_fin]);

        // Devolver los datos como una respuesta JSON
        return response()->json(['disponibilidad' => $disponibilidad]);
    }
}
