<?php

namespace App\Http\Controllers;
use App\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index() {
        return Company::all();
    }

    public function show($id)
    {
        return Company::find($id);
    }
  
    public function store(Request $request) {
      $company = new Company;
      $company->name = $request->name;
      $company->address = $request->address;
      $company->cnpj = $request->cnpj;
      $company->save();
      return ['success' => true];

    }
    public function delete(Request $request, $id){
      $company = Company::findOrFail($id);
      $company->delete();

      return 204;
    }
}
