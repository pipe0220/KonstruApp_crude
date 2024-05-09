<?php

namespace App\Http\Controllers;

use App\Models\Body;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    //
    public function create()
    {
        return view('Frmbodies');
    }

    public function store(Request $request)
    {
        $body = new Body();
        $body->quantity = $request->quntity;
        $body->total = $request->total;
        $body->inventory_id = $request->inventory_id;
        $body->save();
        return redirect()->route('Body.index');
    }
    public function index()
    {
        $products = Body::orderBy('idbody', 'asc')->get();
        return view('body.list', compact('body'));
    }
    public function edit($id)
    {
        $product = Body::find($id);
        return view('body.edit', compact('body'));
    }
    public function show(Body $store)
    {
        return view('body.edit', compact('body'));
    }
    public function update(Request $request, Body $body)
    {
        $body = new Body();
        $body->quantity = $request->quntity;
        $body->total = $request->total;
        $body->inventory_id = $request->inventory_id;
    }
}
