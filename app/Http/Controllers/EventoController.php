<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use App\Models\Salon;
use App\Models\Reserva;
use App\Http\Requests\EventoRequest;
use Illuminate\Support\Facades\Auth;

/**
 * Class EventoController
 * @package App\Http\Controllers
 */
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * metodos para administrador
     */
    public function index()
    {
        $eventos = Evento::paginate();

        return view('admin.evento.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evento = new Evento();
        $usuarios = User::all();
        $salones = Salon::all();
        return view('admin.evento.create', compact('evento', 'usuarios', 'salones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventoRequest $request)
    {
        $event = Evento::create($request->validated());

        $reserva = new Reserva();
        $reserva->insertaRegistro($event->id);

        return redirect()->route('eventos.index')
            ->with('success', 'Evento created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evento = Evento::find($id);

        return view('admin.evento.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $evento = Evento::find($id);

        return view('admin.evento.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventoRequest $request, Evento $evento)
    {
        $evento->update($request->validated());

        return redirect()->route('eventos.index')
            ->with('success', 'Evento updated successfully');
    }

    public function destroy($id)
    {
        Evento::find($id)->delete();

        return redirect()->route('eventos.index')
            ->with('success', 'Evento deleted successfully');
    }

    /**
     * metodos para cliente
     */
    public function eventosDisponibles()
    {
        $eventos = Evento::where('acceso', 'publico')->paginate();

        return view('cliente.evento.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    public function listarEventos()
    {
        $eventos = Evento::where('acceso', 'publico')->paginate();

        return view('cliente.evento.index', compact('eventos'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    public function inserta(EventoRequest $request)
    {
        $event = Evento::create($request->validated());

        $reserva = new Reserva();
        $reserva->insertaRegistro($event->id);

        return redirect()->route('cliente.index')
            ->with('success', 'Evento created successfully.');
    }

    public function reservar()
    {
        $evento = new Evento();
        $salones = Salon::all();
        return view('cliente.evento.create', compact('evento', 'salones'));
    }

    public function misEventos()
    {
        $id_cliente = Auth::id();

        $eventos = Evento::with('salon')
            ->where('id_usuario', $id_cliente)
            ->where('estatus', 'aprobado')
            ->get();

        return view('cliente.evento.mis-eventos', compact('eventos'));
    }

     /**
     * metodos para usuario
     */
}
