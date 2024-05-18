<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Departamento;
use App\Http\Requests\StoreCiudadRequest;
use App\Http\Requests\UpdateCiudadRequest;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ciudades = Ciudad::with('departamento')->get();
        return view('ciudades.index', compact('ciudades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('ciudades.create', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCiudadRequest $request)
    {
        Ciudad::create($request->all());
        return redirect()->route('ciudades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciudad $ciudad)
    {
        $ciudad->load('departamento');
        return view('ciudades.show', compact('ciudad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciudad $ciudad)
    {
        $departamentos = Departamento::all();
        return view('ciudades.edit', compact('ciudad', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCiudadRequest $request, Ciudad $ciudad)
    {
        $ciudad->update($request->all());
        return redirect()->route('ciudades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return redirect()->route('ciudades.index');
    }
}
