<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Ciudad;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::with('ciudadEnvio')->get();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ciudades = Ciudad::all();
        return view('clientes.create', compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:clientes',
            'contraseña' => 'required|min:8',
            'telefono' => 'required',
            'direccion_envio' => 'required',
            'ciudad_envio_id' => 'required|exists:ciudades,id',
        ]);

        Cliente::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'contraseña' => Hash::make($request->contraseña),
            'telefono' => $request->telefono,
            'direccion_envio' => $request->direccion_envio,
            'ciudad_envio_id' => $request->ciudad_envio_id,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        $cliente->load('ciudadEnvio');
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        $ciudades = Ciudad::all();
        return view('clientes.edit', compact('cliente', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefono' => 'required',
            'direccion_envio' => 'required',
            'ciudad_envio_id' => 'required|exists:ciudades,id',
        ]);

        $cliente->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion_envio' => $request->direccion_envio,
            'ciudad_envio_id' => $request->ciudad_envio_id,
        ]);

        if ($request->has('contraseña')) {
            $request->validate([
                'contraseña' => 'required|min:8',
            ]);
            $cliente->contraseña = Hash::make($request->contraseña);
            $cliente->save();
        }

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}
