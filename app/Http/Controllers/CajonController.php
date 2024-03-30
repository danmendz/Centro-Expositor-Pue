<?php

namespace App\Http\Controllers;

use App\Models\Cajon;
use App\Http\Requests\CajonRequest;

/**
 * Class CajonController
 * @package App\Http\Controllers
 */
class CajonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cajons = Cajon::paginate();

        return view('admin.cajon.index', compact('cajons'))
            ->with('i', (request()->input('page', 1) - 1) * $cajons->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cajon = new Cajon();
        return view('admin.cajon.create', compact('cajon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CajonRequest $request)
    {
        Cajon::create($request->validated());

        return redirect()->route('cajons.index')
            ->with('success', 'Cajon created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cajon = Cajon::find($id);

        return view('admin.cajon.show', compact('cajon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cajon = Cajon::find($id);

        return view('admin.cajon.edit', compact('cajon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CajonRequest $request, Cajon $cajon)
    {
        $cajon->update($request->validated());

        return redirect()->route('cajons.index')
            ->with('success', 'Cajon updated successfully');
    }

    public function destroy($id)
    {
        Cajon::find($id)->delete();

        return redirect()->route('cajons.index')
            ->with('success', 'Cajon deleted successfully');
    }
}
