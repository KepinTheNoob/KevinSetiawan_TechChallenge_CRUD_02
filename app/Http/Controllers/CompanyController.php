<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class companyController extends Controller
{
    function welcome(){
        $companys = Company::all();
        return view('welcome', compact('companys'));
    }
    
    function create(){
        $company = Company::all();
        return view('create', compact('company'));
    }

    function create1(Request $request){
        $request->validate([
            'Company' => ['required'],
            'Capital' => ['required'],
        ]);

        Company::create([
            'Company' => $request->Company,
            'Capital' => $request->Capital,
        ]);

        return redirect('/welcome');
    }

    function edit($id){
        $company = Company::find($id);
        return view('edit', compact('company'));
    }

    function edit1(Request $request, $id){
        $request->validate([
            'Company' => ['required'],
            'Capital' => ['required'],
        ]);

        Company::find($id)->update([
            'Company' => $request->Company,
            'Capital' => $request->Capital,
        ]);

        return redirect('welcome');
    }

    function delete($id){
        Company::destroy($id);
        return redirect('welcome');
    }
}
