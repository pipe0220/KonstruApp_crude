<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Http\Requests\StoreCalificacionRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCalificacionRequest;

class CalificacionController extends Controller
{
    public function calificacionesIndex()
    {
        $calificaciones = Calificacion::all();
        return view('calificaciones.index', compact('calificaciones'));
    }

    public function calificacionesCreate()
    {
        return view('calificaciones.create');
    }

    public function calificacionesStore(Request $request)
    {
        $request->validate([
            'puntuacion' => 'required|integer|between:1,5',
            'comentario' => 'required',
            'fecha_calificacion' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id',
            'producto_id' => 'required|exists:productos,id',
        ]);

        Calificacion::create($request->all());
        return redirect()->route('calificaciones.index')->with('success', 'Calificación creada correctamente.');
    }

    public function calificacionesShow(Calificacion $calificacion)
    {
        return view('calificaciones.show', compact('calificacion'));
    }

    public function calificacionesEdit(Calificacion $calificacion)
    {
        return view('calificaciones.edit', compact('calificacion'));
    }

    public function calificacionesUpdate(Request $request, Calificacion $calificacion)
    {
        $request->validate([
            'puntuacion' => 'required|integer|between:1,5',
            'comentario' => 'required',
            'fecha_calificacion' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id',
            'producto_id' => 'required|exists:productos,id',
        ]);

        $calificacion->update($request->all());
        return redirect()->route('calificaciones.index')->with('success', 'Calificación actualizada correctamente.');
    }

    public function calificacionesDestroy(Calificacion $calificacion)
    {
        $calificacion->delete();
        return redirect()->route('calificaciones.index')->with('success', 'Calificación eliminada correctamente.');
    }

}
