<?php

namespace App\Http\Controllers;

use App\Models\Invitado;
use App\Http\Requests\InvitadoRequest;

/**
 * Class InvitadoController
 * @package App\Http\Controllers
 */
class InvitadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invitados = Invitado::paginate();

        return view('admin.invitado.index', compact('invitados'))
            ->with('i', (request()->input('page', 1) - 1) * $invitados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $invitado = new Invitado();
        return view('admin.invitado.create', compact('invitado'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvitadoRequest $request)
    {
        Invitado::create($request->validated());

        return redirect()->route('invitados.index')
            ->with('success', 'Invitado created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $invitado = Invitado::find($id);

        return view('admin.invitado.show', compact('invitado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $invitado = Invitado::find($id);

        return view('admin.invitado.edit', compact('invitado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InvitadoRequest $request, Invitado $invitado)
    {
        $invitado->update($request->validated());

        return redirect()->route('invitados.index')
            ->with('success', 'Invitado updated successfully');
    }

    public function destroy($id)
    {
        Invitado::find($id)->delete();

        return redirect()->route('invitados.index')
            ->with('success', 'Invitado deleted successfully');
    }

    /**
     * metodos para cliente
     */

     /**
     * metodos para usuario
     */
}
