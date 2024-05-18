<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Pais;
use App\Http\Requests\StoreDepartamentoRequest;
use App\Http\Requests\UpdateDepartamentoRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Departamento::with('pais')->get();
        return view('departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::all();
        return view('departamentos.create', compact('paises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartamentoRequest $request)
    {
        Departamento::create($request->all());
        return redirect()->route('departamentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        $departamento->load('pais');
        return view('departamentos.show', compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
        $paises = Pais::all();
        return view('departamentos.edit', compact('departamento', 'paises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartamentoRequest $request, Departamento $departamento)
    {
        $departamento->update($request->all());
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index');
    }
}
