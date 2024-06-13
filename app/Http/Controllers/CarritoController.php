<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Http\Requests\StoreCarritoRequest;
use App\Http\Requests\UpdateCarritoRequest;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function carritosIndex()
    {
        $carritos = Carrito::all();
        return view('carritos.index', compact('carritos'));
    }

    public function carritosCreate()
    {
        return view('carritos.create');
    }

    public function carritosStore(Request $request)
    {
        $request->validate([
            'fecha_creacion' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        Carrito::create($request->all());
        return redirect()->route('carritos.index')->with('success', 'Carrito creado correctamente.');
    }

    public function carritosShow(Carrito $carrito)
    {
        return view('carritos.show', compact('carrito'));
    }

    public function carritosEdit(Carrito $carrito)
    {
        return view('carritos.edit', compact('carrito'));
    }

    public function carritosUpdate(Request $request, Carrito $carrito)
    {
        $request->validate([
            'fecha_creacion' => 'required|date',
            'cliente_id' => 'required|exists:clientes,id',
        ]);

        $carrito->update($request->all());
        return redirect()->route('carritos.index')->with('success', 'Carrito actualizado correctamente.');
    }

    public function carritosDestroy(Carrito $carrito)
    {
        $carrito->delete();
        return redirect()->route('carritos.index')->with('success', 'Carrito eliminado correctamente.');
    }
}
