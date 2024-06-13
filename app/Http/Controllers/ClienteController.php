<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function clientesIndex()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function clientesCreate()
    {
        return view('clientes.create');
    }

    public function clientesStore(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|unique:clientes',
            'contraseña' => 'required|string|min:8',
            'telefono' => 'required|string|max:255',
            'direccion_envio' => 'required|string|max:255',
            'ciudad_envio_id' => 'required|exists:ciudades,id',
        ]);

        $request->merge(['contraseña' => bcrypt($request->contraseña)]);
        Cliente::create($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente creado correctamente.');
    }

    public function clientesShow(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function clientesEdit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function clientesUpdate(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|unique:clientes,email,'.$cliente->id,
            'contraseña' => 'nullable|string|min:8',
            'telefono' => 'required|string|max:255',
            'direccion_envio' => 'required|string|max:255',
            'ciudad_envio_id' => 'required|exists:ciudades,id',
        ]);

        if ($request->filled('contraseña')) {
            $request->merge(['contraseña' => bcrypt($request->contraseña)]);
        }
        $cliente->update($request->all());
        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function clientesDestroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }


}
