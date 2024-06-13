<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoriasIndex()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function categoriasCreate()
    {
        return view('categorias.create');
    }

    public function categoriasStore(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'categoria_padre' => 'nullable|exists:categorias,id',
        ]);

        Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('success', 'Categoría creada correctamente.');
    }

    public function categoriasShow(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    public function categoriasEdit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function categoriasUpdate(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'categoria_padre' => 'nullable|exists:categorias,id',
        ]);

        $categoria->update($request->all());
        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada correctamente.');
    }

    public function categoriasDestroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada correctamente.');
    }

}
