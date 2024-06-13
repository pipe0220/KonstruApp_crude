<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Departamento;
use App\Http\Requests\StoreCiudadRequest;
use App\Http\Requests\UpdateCiudadRequest;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function ciudadesIndex()
    {
        $ciudades = Ciudad::all();
        return view('ciudades.index', compact('ciudades'));
    }

    public function ciudadesCreate()
    {
        return view('ciudades.create');
    }

    public function ciudadesStore(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        Ciudad::create($request->all());
        return redirect()->route('ciudades.index')->with('success', 'Ciudad creada correctamente.');
    }

    public function ciudadesShow(Ciudad $ciudad)
    {
        return view('ciudades.show', compact('ciudad'));
    }

    public function ciudadesEdit(Ciudad $ciudad)
    {
        return view('ciudades.edit', compact('ciudad'));
    }

    public function ciudadesUpdate(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'departamento_id' => 'required|exists:departamentos,id',
        ]);

        $ciudad->update($request->all());
        return redirect()->route('ciudades.index')->with('success', 'Ciudad actualizada correctamente.');
    }

    public function ciudadesDestroy(Ciudad $ciudad)
    {
        $ciudad->delete();
        return redirect()->route('ciudades.index')->with('success', 'Ciudad eliminada correctamente.');
    }

}
