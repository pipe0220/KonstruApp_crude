<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\DetalleCompra;
use App\Http\Requests\StoreCompraRequest;
use App\Http\Requests\UpdateCompraRequest;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compra::with('proveedor', 'detalleCompras')->get();
        return view('compras.index', compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('compras.create', compact('proveedores', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompraRequest $request)
    {
        $compra = Compra::create([
            'fecha_compra' => $request->fecha_compra,
            'proveedor_id' => $request->proveedor_id,
            'total' => 0, // Se actualizará después de agregar los detalles
        ]);

        $total = 0;
        foreach ($request->productos as $producto) {
            $detalleCompra = DetalleCompra::create([
                'compra_id' => $compra->id,
                'producto_id' => $producto['id'],
                'cantidad' => $producto['cantidad'],
                'precio_unitario' => $producto['precio_unitario'],
            ]);

            $total += $detalleCompra->cantidad * $detalleCompra->precio_unitario;
        }

        $compra->total = $total;
        $compra->save();

        return redirect()->route('compras.index')->with('success', 'Compra registrada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Compra $compra)
    {
        $compra->load('proveedor', 'detalleCompras', 'detalleCompras.producto');
        return view('compras.show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compra $compra)
    {
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        $compra->load('detalleCompras', 'detalleCompras.producto');
        return view('compras.edit', compact('compra', 'proveedores', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompraRequest $request, Compra $compra)
    {
        $compra->fecha_compra = $request->fecha_compra;
        $compra->proveedor_id = $request->proveedor_id;
        $compra->total = 0; // Se actualizará después de agregar los detalles

        // Eliminar los detalles anteriores
        DetalleCompra::where('compra_id', $compra->id)->delete();
        $total = 0;
        foreach ($request->productos as $producto) {
            $detalleCompra = DetalleCompra::create([
                'compra_id' => $compra->id,
                'producto_id' => $producto['id'],
                'cantidad' => $producto['cantidad'],
                'precio_unitario' => $producto['precio_unitario'],
            ]);

            $total += $detalleCompra->cantidad * $detalleCompra->precio_unitario;
        }

        $compra->total = $total;
        $compra->save();

        return redirect()->route('compras.index')->with('success', 'Compra actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compra $compra)
    {
        $compra->detalleCompras()->delete();
        $compra->delete();

        return redirect()->route('compras.index')->with('success', 'Compra eliminada exitosamente.');
    }
}
