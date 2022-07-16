<?php

namespace App\Http\Controllers;
use App\Offer;
use App\Company; 
use App\Employee;   
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function store(Request $request){
        $offer = new Offer;
        $offer->product = $request->product;
        $offer->qtd = $request->qtd;
        $offer->address_start = $request->address_start;
        $offer->address_end = $request->address_end;
        $company = Company::find($request->company);
        $employee = Employee::find($request->employee);
        $offer->company_id = $company->id;
        $offer->employee_id = $employee->id;
        
        $offer->save();
        
        return ['success' => true];
    }

    public function index() {
        return Offer::all();
    }
    public function show($id)
    {
        return Offer::find($id);
    }

}
