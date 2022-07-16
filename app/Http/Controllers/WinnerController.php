<?php

namespace App\Http\Controllers;
use App\Company;
use App\Lance;
use App\Winner;
use Illuminate\Http\Request;

class WinnerController extends Controller
{
    public function store(Request $request) {
        $winner = new Winner;
        $winner->winner = $request->winner;
        $company = Company::find($request->company);
        $lance = Lance::find($request->lance);
        $winner->lance_id = $lance->id;
        $winner->company_id = $company->id;
        $winner->save();
        return ['success' => true];
    }
    public function index() {
        return Winner::all();
    }
}
