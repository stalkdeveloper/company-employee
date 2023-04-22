<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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
        $data = Company::with('users')->latest()->paginate(10);
        return view('company.index', compact('data'));
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
    public function store(UserRequest $request)
    {
        $data = $request->all();  
 
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/logo/', $filename);
            $data['image'] = $filename;
        }
        $data['user_id'] = Auth()->user()->id;

        Company::create($data)->save();        
        return redirect()->route('company.index')->with('success','Company created successfully.');
        
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
    public function update(UserRequest $request, Company $company)
    {
        $request->validate([
            'company_name' => 'required',
            'email'=>'required',
            'image' => 'required',
            'website'=>'required',           
        ]); 

        $data = $request->all();  
 
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/logo/', $filename);
            $data['image'] = $filename;
        }
        
        $company->update($data);        
        return redirect()->route('company.index')->with('success','Company update successfully.');
        //return view('company.index', compact('company'))->with('success','Company details update successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $Image_Path = 'image/'.$company->image;
        unset($Image_Path);
        $company->delete();
        return redirect()->route('company.index')->with('success','Company details deleted successfully');
    }
}
