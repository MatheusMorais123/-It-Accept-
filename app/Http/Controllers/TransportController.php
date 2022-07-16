<?php

namespace App\Http\Controllers;
use App\Transport;
use App\Company;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function store(Request $request) {
        $transport = new Transport;
        $transport->name = $request->name;
        $transport->address = $request->address;
        $transport->cnpj = $request->cnpj;
        $company = Company::find($request->company);
        $transport->company_id = $company->id;
        $transport->save();
        return ['success' => true];
    }
    public function index() {
        return Transport::all();
    }
}
