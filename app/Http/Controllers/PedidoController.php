<?php

namespace App\Http\Controllers;

use App\Models\Estado_pedido;
use App\Models\Metodo_pago;
use App\Models\Pedido;
use App\Http\Requests\StorePedidoRequest;
use App\Http\Requests\UpdatePedidoRequest;
use App\Models\Cliente;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::with('cliente', 'metodoPago', 'estadoPedido', 'detallePedido')->get();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $metodosPago = Metodo_pago::all();
        $estadosPedido = Estado_pedido::all();
        return view('pedidos.create', compact('clientes', 'metodosPago', 'estadosPedido'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePedidoRequest $request)
    {
        $pedido = Pedido::create($request->all());
        // Crear detalles del pedido
        return redirect()->route('pedidos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        $pedido->load('cliente', 'metodoPago', 'estadoPedido', 'detallePedido');
        return view('pedidos.show', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        return view('pedido.edit', ['pedido' => $pedido]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePedidoRequest $request, Pedido $pedido)
    {
        $pedido->update($request->all());
        // Actualizar detalles del pedido
        return redirect()->route('pedidos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }
}
