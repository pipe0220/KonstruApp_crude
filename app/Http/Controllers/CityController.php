<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function create()
    {
        return view('Frmcities');
    }
    public function store(Request $request)
    {
        $city = new City;
        $city->name = $request->input('name');
        $city->save();
        return redirect()->route('city.index');
    }

    public function index()
    {
        $city = City::orderBy('idcity', 'asc')->get();
        return view('city.list', compact('cities'));
    }

    public function show(City $city)
    {
        return view('city.show', compact('city'));
    }

    public function edit(City $city)
    {
        return view('city.edit', compact('city'));
    }

    public function update(Request $request, $city)
    {
        $city->name = $request->input('name');
        $city->save();
        return redirect()->route('city.index');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('city.index');
    }
}
