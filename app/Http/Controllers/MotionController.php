<?php

namespace App\Http\Controllers;

use app\Models\Motion;

use Illuminate\Http\Request;

class MotionController extends Controller
{
    //
    public function create()
    {
        return view('Frmmotions');
    }

    public function store(Request $request)
    {
        $motion = new Motion;
        $motion->name = $request->name;
        $motion->description = $request->description;
        $motion->save();
        return redirect()->route('motion.index');
    }

    public function index()
    {
        $motion = Motion::orderBy('idmotion', 'asc')->get();
        return view('motion.list', compact('motions'));
    }
    public function show(Motion $motion)
    {
        return view('motion.show', compact('motion'));
    }
    public function edit(Motion $motion)
    {
        return view('motion.edit', compact('motion'));
    }


    public function update(Request $request, $motion)
    {
        $motion->name = $request->name;
        $motion->description = $request->description;
        $motion->save();
        return redirect()->route('motion.index');
    }

    public function destroy(Motion $motion)
    {
        $motion->delete();
        return redirect()->route('motion.index');
    }
}
