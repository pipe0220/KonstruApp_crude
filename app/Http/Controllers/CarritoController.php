<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Producto;
use App\Models\DetalleCarrito;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCarritoRequest;
use App\Http\Requests\UpdateCarritoRequest;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Auth::user();
        $carritos = $cliente->carritos()->with('detalleCarritos.producto')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all();
        return view('carrito.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarritoRequest $request)
    {
        $cliente = Auth::user();
        $carrito = Carrito::create([
            'cliente_id' => $cliente->id,
            'fecha_creacion' => now(),
        ]);

        foreach ($request->productos as $producto) {
            DetalleCarrito::create([
                'carrito_id' => $carrito->id,
                'producto_id' => $producto['id'],
                'cantidad' => $producto['cantidad'],
                'precio_unitario' => $producto['precio'],
            ]);
        }

        return redirect()->route('carrito.index')->with('success', 'Carrito creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrito $carrito)
    {
        $carrito->load('detalleCarritos.producto');
        return view('carrito.show', compact('carrito'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrito $carrito)
    {
        $productos = Producto::all();
        return view('carrito.edit', compact('carrito', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarritoRequest $request, Carrito $carrito)
    {
        $carrito->detalleCarritos()->delete();

        foreach ($request->productos as $producto) {
            DetalleCarrito::create([
                'carrito_id' => $carrito->id,
                'producto_id' => $producto['id'],
                'cantidad' => $producto['cantidad'],
                'precio_unitario' => $producto['precio'],
            ]);
        }

        return redirect()->route('carrito.index')->with('success', 'Carrito actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrito $carrito)
    {
        $carrito->detalleCarritos()->delete();
        $carrito->delete();
        return redirect()->route('carrito.index')->with('success', 'Carrito eliminado exitosamente.');
    }
}
