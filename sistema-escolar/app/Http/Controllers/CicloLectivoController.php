<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CicloLectivo;
use App\PeriodoAcademico;

class CicloLectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ciclo = CicloLectivo::get();
        return view('cicloLectivo.index')->with('ciclos',$ciclo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $periodos = PeriodoAcademico::get();
       // dd($periodos);
        return view('cicloLectivo.create',['periodos'=>$periodos]);
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
        $ciclo = new CicloLectivo;
        $ciclo->PeriodoId = $request->input('PeriodoId');
        $ciclo->Descripcion = $request->input('Descripcion');
        $ciclo->TipoPeriodo = $request->input('TipoPeriodo');
        $ciclo->FechaInicio = $request->input('FechaInicio');
        $ciclo->FechaFin = $request->input('FechaFin');
        $ciclo->Estatus = $request->input('Estatus');

        $ciclo->save();

        return redirect()->route('ciclolectivo.index');

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

        $ciclo = CiloLectivo::find($id);
        
        return view('cicloLectivo.edit')->with('ciclo', $ciclo);

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
        
        $ciclo = CiloLectivo::find($id);
        $ciclo->PeriodoId = $request->input('PeriodoId');
        $ciclo->Descripcion = $request->input('Descripcion');
        $ciclo->TipoPeriodo = $request->input('TipoPeriodo');
        $ciclo->FechaInicio = $request->input('FechaInicio');
        $ciclo->FechaFin = $request->input('FechaFin');
        $ciclo->Estatus = $request->input('Estatus');

        $ciclo->save();

        return redirect()->route('ciclolectivo.index');


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

        CicloLectivo::destroy($id);
        return redirect()->route('ciclolectivo.index');

    }
}
