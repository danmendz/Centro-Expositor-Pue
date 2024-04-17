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
    public function eventos()
    {
        $allEventos = Evento::where('estatus', 'aprobado')->get();
        $rol = Auth::user()->role;

        if($rol == 3) {
            return view('admin.index', compact('allEventos'));

        } else {
            return view('usuario.index', compact('allEventos'));
        }
    }

    public function index()
    {
        $eventos = Evento::paginate();
        $usuarios = User::all();

        return view('admin.evento.index', compact('eventos', 'usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $eventos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evento = new Evento();
        $usuarios = User::all();
        $salones = Salon::where('estatus', 'disponible')->get();
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
        $id_usuario = Auth::id();
        $rol = Auth::user()->role;

        // Obtener los IDs de los eventos asociados al cliente
        $eventos_ids = Evento::where('id_usuario', $id_usuario)
            ->pluck('id')
            ->toArray();

        // Si hay eventos asociados al cliente
        if (!empty($eventos_ids)) {
            $eventos = Evento::with('user', 'salon')
                ->whereNotIn('id', $eventos_ids)
                ->where('estatus', 'aprobado')
                // ->whereNotIn('estatus', ['cancelado', 'finalizado'])
                ->get();
        } else {
            // Si no hay eventos asociados al cliente
            $eventos = Evento::with('user', 'salon')
                ->where('estatus', 'aprobado')
                ->get();
        }

        if($rol == 2) {
            return view('cliente.evento.index', compact('eventos'));

        } else {
            return view('usuario.evento.index', compact('eventos'));
        }

        // // Retornar la vista con los datos de los eventos
        // return view('cliente.evento.index', compact('eventos'));
    }

    public function mostrar()
    {
        $eventos = Evento::where('acceso', 'publico')
                ->where('estatus', 'aprobado')
                ->paginate();

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
        $rol = Auth::user()->role;
        
        $request->validate([
            'nombre' => 'required|max:255',
            'tipo' => 'required',
            'asistentes' => 'required|numeric',
            'acceso' => 'required',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'hora_inicio' => 'required',
            'hora_fin' => 'required',
            'id_salon' => 'required',
            'estatus' => 'required',
            'id_usuario' => 'required',
            'comentarios' => 'nullable',
        ]);
    
        $evento = new Evento();
        $evento->nombre = $request->input('nombre');
        $evento->tipo = $request->input('tipo');
        $evento->asistentes = $request->input('asistentes');
        $evento->acceso = $request->input('acceso');
        $evento->fecha_inicio = $request->input('fecha_inicio');
        $evento->fecha_fin = $request->input('fecha_fin');
        $evento->hora_inicio = $request->input('hora_inicio');
        $evento->hora_fin = $request->input('hora_fin');
        $evento->id_salon = $request->input('id_salon');
        $evento->estatus = $request->input('estatus');
        $evento->id_usuario = $request->input('id_usuario');
        $evento->comentarios = $request->input('comentarios');
        $evento->save();
    
        $reserva = new Reserva();
        $reserva->insertaRegistro($evento->id);

        if($rol == 2) {
            return redirect()->route('cliente.index')
            ->with('success', 'Evento created successfully.');

        } else {
            return redirect()->route('usuario.index')
            ->with('success', 'Evento created successfully.');
        }
    }

    public function reservar()
    {
        $rol = Auth::user()->role;

        $evento = new Evento();
        $salones = Salon::where('estatus', 'disponible')->get();

        if($rol == 2) {
            return view('cliente.evento.create', compact('evento', 'salones'));

        } else {
            return view('usuario.evento.create', compact('evento', 'salones'));
        }
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

    public function eventosAutorizados()
    {
        $eventos = Evento::all();
        $rol = Auth::user()->role;

        if($rol == 2) {
            return view('cliente.evento.eventos-autorizados', compact('eventos'));

        } else {
            return view('usuario.evento.eventos-autorizados', compact('eventos'));
        }
    }

     /**
     * metodos para usuario
     */
}
