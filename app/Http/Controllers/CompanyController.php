<?php

namespace App\Http\Controllers;

use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function create()
    {
        return view('Frmcompanies');
    }

    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->save();
        return redirect()->route('company.index');
    }

    public function index()
    {
        $company = Company::orderBy('idcompany', 'asc')->get();
        return view('company.list', compact('companies'));
    }
    public function show(Company $company)
    {
        return view('company.show', compact('company'));
    }
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }
    public function update(Request $request, $company)
    {
        $company->name = $request->input('name');
        $company->save();
        return redirect()->route('company.index');
    }
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index');
    }
}
