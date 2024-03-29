<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use App\Http\Requests\SalonRequest;

/**
 * Class SalonController
 * @package App\Http\Controllers
 */
class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons = Salon::paginate();

        return view('salon.index', compact('salons'))
            ->with('i', (request()->input('page', 1) - 1) * $salons->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salon = new Salon();
        return view('salon.create', compact('salon'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SalonRequest $request)
    {
        Salon::create($request->validated());

        return redirect()->route('salons.index')
            ->with('success', 'Salon created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $salon = Salon::find($id);

        return view('salon.show', compact('salon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $salon = Salon::find($id);

        return view('salon.edit', compact('salon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SalonRequest $request, Salon $salon)
    {
        $salon->update($request->validated());

        return redirect()->route('salons.index')
            ->with('success', 'Salon updated successfully');
    }

    public function destroy($id)
    {
        Salon::find($id)->delete();

        return redirect()->route('salons.index')
            ->with('success', 'Salon deleted successfully');
    }
}
