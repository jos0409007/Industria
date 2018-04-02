<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcial;

class ParcialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $parcial = Parcial::get();
        return view('parcial.index')->with('parcial',$parcial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('parcial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $parcial = new Parcial;
        $parcial->CicloId = $request->input('CicloId');
        $parcial->Descripcion = $request->input('Descripcion');
        $parcial->FechaInicio = $request->input('FechaInicio');
        $parcial->FechaFin = $request->input('FechaFin');
        $parcial->Estatus = $request->input('Estatus');

        $parcial->save();
        
        return redirect()->route('parcial.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $parcial = Parcial::find($id);
        return view('parcial.edit')->with('parcia',$parcial);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $parcial = Parcial::find($id);
        $parcial->CicloId = $request->input('CicloId');
        $parcial->Descripcion = $request->input('Descripcion');
        $parcial->FechaInicio = $request->input('FechaInicio');
        $parcial->FechaFin = $request->input('FechaFin');
        $parcial->Estatus = $request->input('Estatus');

        $parcial->save();
        
        return redirect()->route('parcial.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Parcial::destroy($id);
        return redirect()->route('parcial.index');


    }
}
