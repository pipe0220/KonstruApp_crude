<?php

namespace App\Http\Controllers;

use App\Models\Inventory;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function create()
    {
        return view('Frminventories');
    }
    public function store(Request $request)
    {
        $inventory = new Inventory();
        $inventory->initial_quantity = $request->initial_quantity;
        $inventory->final_quantity = $request->final_quantity;
        $inventory->current_quantity = $request->current_quantity;
        $inventory->lot = $request->lot;
        $inventory->purchase_price = $request->purchase_price;
        $inventory->selling_price = $request->selling_price;
        $inventory->profit_percentage = $request->profit_percentage;
        $inventory->preparation_date = $request->preparation_date;
        $inventory->save();
        return redirect()->route('inventories.index');
    }

    public function index()
    {
        $inventories = Inventory::all();
        return view('inventory.index', compact('inventories'));
    }
    public function show(Inventory $inventory)
    {
        return view('inventory.show', compact('inventory'));
    }
    public function edit(Inventory $inventory)
    {
        return view('inventory.edit', compact('inventory'));
    }
    public function update(Request $request, Inventory $inventory)
    {
        $inventory->initial_quantity = $request->initial_quantity;
        $inventory->final_quantity = $request->final_quantity;
        $inventory->current_quantity = $request->current_quantity;
        $inventory->lot = $request->lot;
        $inventory->purchase_price = $request->purchase_price;
        $inventory->selling_price = $request->selling_price;
        $inventory->profit_percentage = $request->profit_percentage;
        $inventory->preparation_date = $request->preparation_date;
        $inventory->save();
        return redirect()->route('inventories.index');
    }
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventories.index');
    }
}
