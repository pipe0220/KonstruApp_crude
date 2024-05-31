<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCalificacionRequest;
use App\Http\Requests\UpdateCalificacionRequest;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calificaciones = Calificacion::with('cliente', 'producto')->get();
        return view('calificaciones.index', compact('calificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all();
        return view('calificaciones.create',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCalificacionRequest $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'puntuacion' => 'required|integer|between:1,5',
            'comentario' => 'required',
        ]);

        $cliente = Auth::user(); // Asumiendo que el cliente está autenticado

        Calificacion::create([
            'cliente_id' => $cliente->id,
            'producto_id' => $request->producto_id,
            'puntuacion' => $request->puntuacion,
            'comentario' => $request->comentario,
            'fecha_calificacion' => now(),
        ]);

        return redirect()->route('calificaciones.index')->with('success', 'Gracias por su calificacion.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Calificacion $calificacion)
    {
        $calificacion->load('cliente', 'producto');
        return view('calificaciones.show', compact('calificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calificacion $calificacion)
    {
        $productos = Producto::all();
        return view('calificaciones.edit', compact('calificacion', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalificacionRequest $request, Calificacion $calificacion)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'puntuacion' => 'required|integer|between:1,5',
            'comentario' => 'required',
        ]);
        $calificacion->update([
            'producto_id' => $request->producto_id,
            'puntuacion' => $request->puntuacion,
            'comentario' => $request->comentario,
        ]);
        return redirect()->route('calificaciones.index')->with('success', 'Calificacion actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calificacion $calificacion)
    {
        $calificacion->delete();
        return redirect()->route('calificaciones.index')->with('success', 'Calificacion eliminada.');
    }
}
