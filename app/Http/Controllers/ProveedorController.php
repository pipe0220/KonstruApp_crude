<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Proveedor;
use App\Http\Requests\StoreProveedorRequest;
use App\Http\Requests\UpdateProveedorRequest;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedores = Proveedor::with('ciudad')->get();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ciudades = Ciudad::all();
        return view('proveedores.create', compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProveedorRequest $request)
    {
        Proveedor::create($request->all());
        return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Proveedor $proveedor)
    {
        $proveedor->load('ciudad');
        return view('proveedores.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proveedor $proveedor)
    {
        $ciudades = Ciudad::all();
        return view('proveedores.edit', compact('proveedor', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());
        return redirect()->route('proveedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}
