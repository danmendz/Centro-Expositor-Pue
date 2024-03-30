<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Http\Requests\AreaRequest;

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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $area = new Area();
        return view('admin.area.create', compact('area'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AreaRequest $request)
    {
        Area::create($request->validated());

        return redirect()->route('areas.index')
            ->with('success', 'Area created successfully.');
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

        return view('admin.area.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AreaRequest $request, Area $area)
    {
        $area->update($request->validated());

        return redirect()->route('areas.index')
            ->with('success', 'Area updated successfully');
    }

    public function destroy($id)
    {
        Area::find($id)->delete();

        return redirect()->route('areas.index')
            ->with('success', 'Area deleted successfully');
    }
}
