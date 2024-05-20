<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Http\Requests\StorePaisRequest;
use App\Http\Requests\UpdatePaisRequest;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = Pais::all();
        return view('paises.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaisRequest $request)
    {
        Pais::create($request->all());
        return redirect()->route('paises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pais $pais)
    {
        return view('paises.show', compact('pais'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pais $pais)
    {
        return view('paises.edit', compact('pais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaisRequest $request, Pais $pais)
    {
        $pais->update($request->all());
        return redirect()->route('paises.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pais $pais)
    {
        $pais->delete();
        return redirect()->route('paises.index');
    }
}
