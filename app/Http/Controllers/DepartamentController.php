<?php

namespace App\Http\Controllers;

use app\Models\Departament;

use Illuminate\Http\Request;

class DepartamentController extends Controller
{
    //
    public function create()
    {
        return view('Frmdepartaments');
    }

    public function store(Request $request)
    {
        $departament = new Departament;
        $departament->name = $request->name;
        
        $departament->save();
        return $departament;
    }
    public function index()
    {
        $departament = Departament::orderBy('iddepartament', 'asc')->get();
        return view('departament.list', compact('departaments'));
    }
    public function show(Departament $departament)
    {
        return view('departament.show', compact('departament'));
    }
    public function edit(Departament $departament)
    {
        return view('departament.edit', compact('departament'));
    }
    public function update(Request $request, $departament)
    {
        $departament->name = $request->input('name');
        $departament->save();
        return redirect()->route('departament.index');
    }
    public function destroy(Departament $departament)
    {
        $departament->delete();
        return redirect()->route('departament.index');
    }
}
