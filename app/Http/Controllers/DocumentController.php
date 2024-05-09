<?php

namespace App\Http\Controllers;

use app\models\Document;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    //
    public function create()
    {
        return view('Frmdocuments');
    }
    public function store(Request $request)
    {
        $document = new Document;
        $document->name = $request->name;
        $document->description = $request->description;
        $document->save();
        return redirect()->route('document.index');
    }

    public function index()
    {
        $document = Document::orderBy('iddocument', 'asc')->get();
        return view('document.list', compact('documents'));
    }

    public function show(Document $document)
    {
        return view('document.show', compact('document'));
    }

    public function edit(Document $document)
    {
        return view('document.edit', compact('document'));
    }

    public function update(Request $request, Document $document)
    {
        $document->name = $request->name;
        $document->description = $request->description;
        $document->save();
        return redirect()->route('document.index');
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('document.index');
    }
}
