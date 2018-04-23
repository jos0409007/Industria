<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trabajo;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trabajo = Trabajo::get();
        return view('trabajo.index')->with('trabajo',$trabajo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('trabajo.create');

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
        $trabajo = new Trabajo;

        $trabajo->DocenteId = $request->input('DocenteId');
        $trabajo->Nombre = $request->input('Nombre');
        $trabajo->Descripcion = $request->input('Descripcion');
        $trabajo->ParcialId = $request->input('ParcialId');
        $trabajo->FechaInicio = $request->input('FechaInicio');
        $trabajo->FechaFin = $request->input('FechaFin');
        $trabajo->Valor = $request->input('Valor');
        $trabajo->TipoTrabajo = $request->input('TipoTrabajo');

        $trabajo->save();
        return redirect()->route('trabajo.index');

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
        $trabajo = Trabajo::find($id);
        return view('trabajo.edit')->with('trabajo', $trabajo);

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
        $trabajo = Trabajo::find($id);
        $trabajo->DocenteId = $request->input('DocenteId');
        $trabajo->Nombre = $request->input('Nombre');
        $trabajo->Descripcion = $request->input('Descripcion');
        $trabajo->ParcialId = $request->input('ParcialId');
        $trabajo->FechaInicio = $request->input('FechaInicio');
        $trabajo->FechaFin = $request->input('FechaFin');
        $trabajo->Valor = $request->input('Valor');
        $trabajo->TipoTrabajo = $request->input('TipoTrabajo');

        $trabajo->save();
        return redirect()->route('trabajo.index');

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

        Trabajo::destroy($id);
        return redirect()->route('trabajo.index');
    }
}
