<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Raw;
use App\Models\Store;

class StoreController extends Controller
{
    //
    public function create()
    {
        return view('Frmstores');
    }

    public function store(Request $request)
    {
        $product = new Store();
        $product->name = $request->name;
        $product->companies_id = $request->companies_id;
        $product->cities_id = $request->cities_id;
        $product->save();
        return redirect()->route('Store.index');
    }
    public function index()
    {
        $products = Store::orderBy('idstore', 'asc')->get();
        return view('store.list', compact('store'));
    }
    public function edit($id)
    {
        $product = Store::find($id);
        return view('store.edit', compact('store'));
    }
    public function show(Store $store)
    {
        return view('store.edit', compact('store'));
    }
    public function update(Request $request, Store $store)
    {
        $product = new Store();
        $product->name = $request->name;
        $product->companies_id = $request->companies_id;
        $product->cities_id = $request->cities_id;
    }
}
