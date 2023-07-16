<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id','desc')->paginate(5);
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['web_site'] = $request->web_site;
        
        //image upload
        if($request->logo != ""){
            $original_name = time()."_".$request->logo->getClientOriginalName();//Original image file name
            $request->logo->move(public_path('logo_uploads'), $original_name);//Save into: public/images
            $data['logo'] = $original_name;

        }
        Company::create($data);

        return redirect()->route('company.index')->with('success','Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('company.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['web_site'] = $request->web_site;
        
        //image upload
        if($request->logo != ""){
            $original_name = time()."_".$request->logo->getClientOriginalName();//Original image file name
            $request->logo->move(public_path('logo_uploads'), $original_name);//Save into: public/images
            $data['logo'] = $original_name;

        }

        $company->fill($data)->save();
        return redirect()->route('company.index')->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index')->with('success','Company has been deleted successfully');
    }
}
