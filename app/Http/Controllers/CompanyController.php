<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
        Company::create($request->all());
   
        return redirect()->route('companies.index')
                        ->with('success','Company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        return view('companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());
  
        return redirect()->route('companies.index')
                        ->with('success','Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
        $company->delete();
  
        return redirect()->route('companies.index')
                        ->with('success','Company deleted successfully');
    }
}
