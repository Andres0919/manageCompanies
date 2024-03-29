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
        
        $companies = Company::paginate(10);

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
        $this->validateInputs($request);
        
        $file = $request->Logo;
        $company = Company::create($request->all());
        $store = $file->store('/public/logos');
        $path = '/storage/logos/'.explode( '/', $store)[2];
        $company->update(['Logo' => $path]);

        $this->sendEmail($request->Name);
        
   
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
    public function edit(Company $company){
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
    public function update(Request $request, Company $company){
        $this->validateInputs($request);

        if(!empty($request->Logo)){
            $file = $request->Logo;
            $store = $file->store('/public/logos');
            $path = '/storage/logos/'.explode('/', $store)[2];
            $logo = $path;
        }else{
            $logo = $company->Logo;
        }
        
        $company->update([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Logo' => $logo,
            'WebSite' => $request->WebSite
        ]);
  
        return redirect()->route('companies.index')
                        ->with('success','Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company){
        //
        $company->delete();
  
        return redirect()->route('companies.index')
                        ->with('success','Company deleted successfully');
    }

    private function validateInputs($request){
        $request->validate([
            'Name' => 'required',
            'Logo' => 'dimensions:min_width=100,min_height=100'
        ]);
    }

    private function sendEmail($nameCompany){
        $data = [
            'email' => 'andres.posada0919@gmail.com',
            'name_email' => 'Andrés posada',
            'subject' => 'New Company',
            'name' => $nameCompany
        ];

        \Mail::send('emails.message', $data, function($message) use ($data){
            $message->from($data['email'], $data['name_email']);
    
            $message->subject($data['subject']);
    
            $message->to($data['email'], $data['name_email']);
        });
    }
}
