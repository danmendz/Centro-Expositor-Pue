<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Evento;
use App\Models\Salon;
use App\Http\Requests\AreaRequest;
use Illuminate\Support\Facades\DB;

/**
 * Class AreaController
 * @package App\Http\Controllers
 */
class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::paginate();

        return view('admin.area.index', compact('areas'))
            ->with('i', (request()->input('page', 1) - 1) * $areas->perPage());
    }

    public function accesoArea()
    {
        $areas = Area::all();

        if($rol == 2) {
            return view('cliente.area.acceso', compact('areas'));

        } else {
            return view('usuario.area.acceso', compact('areas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $area = new Area();
        $eventos = Evento::all();
        $salones = Salon::all();
        return view('admin.area.create', compact('area', 'eventos', 'salones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AreaRequest $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'capacidad' => 'required',
            'id_evento' => 'nullable',
            'id_salon' => 'nullable', 
        ]);
        Area::create($request->all());
        
        return redirect()->route('areas.index')
        ->with('success', 'Area created successfully.');

        // Area::create($request->validated());
        // return redirect()->route('areas.index')
        //     ->with('success', 'Area created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $area = Area::find($id);

        return view('admin.area.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $area = Area::find($id);
        $eventos = Evento::all();
        $salones = Salon::all();
        return view('admin.area.edit', compact('area', 'eventos', 'salones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AreaRequest $request, Area $area)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'capacidad' => 'required',
            'id_evento' => 'nullable',
            'id_salon' => 'nullable', 
        ]);

        $area->update($request->all());

        return redirect()->route('areas.index')
            ->with('success', 'Area updated successfully');

        // $area->update($request->validated());
        // return redirect()->route('areas.index')
        //     ->with('success', 'Area updated successfully');
    }

    public function destroy($id)
    {
        Area::find($id)->delete();

        return redirect()->route('areas.index')
            ->with('success', 'Area deleted successfully');
    }

    /**
     * metodos para cliente
     */

    function listarAsignadas() {
        $idUsuario = auth()->user()->id;

        // Obtener los IDs de los eventos asignados al usuario
        $eventosIds = Evento::where('id_usuario', $idUsuario)->pluck('id');

        // Obtener las áreas asociadas a los eventos del usuario
        $areas = DB::table('areas')
                    ->whereIn('id_evento', $eventosIds)
                    ->select('areas.*')
                    ->distinct()
                    ->get();

        return view('cliente.area.asignadas', compact('areas'));
    }


     /**
     * metodos para usuario
     */
}
