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

    
    public function barChart()
    {
    // Replace this with your actual data retrieval logic 
        $data = [
            'labels' => ['Cajon 1', 'Cajon 2', 'Cajon 3', 'Cajon 4', 'Cajon 5'], 
            'data' => [45, 39, 60, 61, 6],
        ];
        return view ('admin.reporte.index', compact ('data'));
    }
}
