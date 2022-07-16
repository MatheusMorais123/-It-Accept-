<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Company;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store(Request $request) {
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->cpf = $request->cpf;
        $company = Company::find($request->company);
        $employee->company_id = $company->id;
        $employee->save();
        return ['success' => true];
    }
    public function index() {
        return Employee::all();
    }

    public function show($id)
    {
        return Employee::find($id);
    }
}
