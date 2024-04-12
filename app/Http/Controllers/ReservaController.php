<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Area;
use App\Models\Evento;
use App\Http\Requests\ReservaRequest;
use Illuminate\Support\Facades\DB;

/**
 * Class ReservaController
 * @package App\Http\Controllers
 */
class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::paginate();

        return view('admin.reserva.index', compact('reservas'))
            ->with('i', (request()->input('page', 1) - 1) * $reservas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reserva = new Reserva();
        $eventos = Evento::all();
        return view('admin.reserva.create', compact('reserva', 'eventos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservaRequest $request)
    {
        Reserva::create($request->validated());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reserva = Reserva::find($id);

        return view('admin.reserva.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reserva = Reserva::find($id);

        return view('admin.reserva.edit', compact('reserva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservaRequest $request, Reserva $reserva)
    {
        $reserva->update($request->validated());

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva updated successfully');
    }

    public function destroy($id)
    {
        Reserva::find($id)->delete();

        return redirect()->route('reservas.index')
            ->with('success', 'Reserva deleted successfully');
    }

    public function aprobarEvento($idEvento)
    {
        try {
            $reservar = DB::statement("CALL estatus_reserva_evento(?)", [$idEvento]);

            if($reservar > 0) {
                $area = new Area();
                $area->asignarArea($idEvento);

            } else {
                return redirect()->route('reservas.index')
                ->with('success', 'Reserva aprobada correctamente');
            }
            
        } catch (\Exception $e) {
            return redirect()->route('reservas.index')
            ->with('error', 'No se pudo reservar el evento');
        }
    }

    /**
     * metodos para cliente
     */

     /**
     * metodos para usuario
     */
}
