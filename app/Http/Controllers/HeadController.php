<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Head;

class HeadController extends Controller
{
    //
    public function create()
    {
        return view('Frmheads');
    }
    public function store(Request $request)
    {

        $head = new Head;
        $head->date = $request->date;
        $head->total_value = $request->total_value;
        $head->people_id = $request->people_id;
        $head->save();
        return redirect()->route('Head.index');
    }
    public function index()
    {
        $products = Head::orderBy('idhead', 'asc')->get();
        return view('head.list', compact('head'));
    }
    public function edit($id)
    {
        $product = Head::find($id);
        return view('head.edit', compact('head'));
    }
    public function show(head $store)
    {
        return view('head.edit', compact('head'));
    }
    public function update(Request $request, Head $head)
    {
        $head = new Head;
        $head->date = $request->date;
        $head->total_value = $request->total_value;
        $head->people_id = $request->people_id;
    }
}
