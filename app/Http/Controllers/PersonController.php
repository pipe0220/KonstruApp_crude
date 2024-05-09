<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\Person;

class PersonController extends Controller
{
    //
    public function create()
    {
        return view('Frmpeople');
    }

    public function store(Request $request)
    {
        $person = new Person;
        $person->name1 = $request->name1;
        $person->name2 = $request->name2;
        $person->last_name_1 = $request->last_name_1;
        $person->last_name_2 = $request->last_name_2;
        $person->phone_1 = $request->phone1;
        $person->phone_2 = $request->phone2;
        $person->email = $request->email;
        $person->birth_date = $request->birth_date;
        $person->gender = $request->gender;
        $person->sex = $request->sex;
        $person->departament = $request->departament;
        $person->city = $request->city;
        $person->country = $request->country;
        $person->address = $request->address;
        $person->save();
        return redirect()->route('person.index');
    }

    public function index()
    {
        $people = Person::all();
        return view('person.index', compact('people'));
    }

    public function show(Person $person)
    {
        return view('person.show', compact('person'));
    }

    public function edit(Person $person)
    {
        return view('person.edit', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
        $person->name1 = $request->name1;
        $person->name2 = $request->name2;
        $person->last_name_1 = $request->last_name_1;
        $person->last_name_2 = $request->last_name_2;
        $person->phone_1 = $request->phone1;
        $person->phone_2 = $request->phone2;
        $person->email = $request->email;
        $person->birth_date = $request->birth_date;
        $person->gender = $request->gender;
        $person->sex = $request->sex;
        $person->departament = $request->departament;
        $person->city = $request->city;
        $person->country = $request->country;
        $person->address = $request->address;
        $person->save();
        return redirect()->route('person.index');
    }
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('person.index');
    }
}
