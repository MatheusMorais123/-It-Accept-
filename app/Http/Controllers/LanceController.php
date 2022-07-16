<?php

namespace App\Http\Controllers;
use App\Transport;
use App\Lance;
use Illuminate\Http\Request;

class LanceController extends Controller
{
    public function store(Request $request) {
        $lance = new Lance;
        $lance->value = $request->value;
        $transport = Transport::find($request->transport);
        $lance->transport_id = $transport->id;
        $lance->save();
        return ['success' => true];
    }
    public function index() {
        return Lance::all();
    }
}
