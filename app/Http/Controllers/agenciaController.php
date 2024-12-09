<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use Illuminate\Http\Request;

class agenciaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencias  = Agencia::all(); 
        return view('agencias.index', compact('agencias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $agencia = Agencia::findorfail($id);
        return view('agencias.edit', compact('agencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {    
        $agencia = Agencia::find($id);
        
        $agencia->name = $request->name;
        $agencia->nit = $request->nit;
        $agencia->type = $request->type;
        $agencia->save();
       
    
        return redirect('/agencia');
    }
}
