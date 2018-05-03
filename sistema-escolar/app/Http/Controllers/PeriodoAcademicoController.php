<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PeriodoAcademico;

class PeriodoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $periodoAcademico = PeriodoAcademico::get();
        return view('periodoAcademico.index')->with('periodos',$periodoAcademico);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('periodoAcademico.create');
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
        $periodoAcademico = new PeriodoAcademico;
        $periodoAcademico->Descripcion = $request->input('Descripcion');
        $periodoAcademico->Estatus = $request->input('Estatus');

        $periodoAcademico->save();

        return redirect()->route('periodoacademico.index');

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
       // dd($id);
        $periodoAcademico = PeriodoAcademico::find($id);

        return view('periodoAcademico.edit')->with('periodoAcademico',$periodoAcademico);

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
        $periodoAcademico = PeriodoAcademico::find($id);
        $periodoAcademico->Descripcion = $request->input('Descripcion');
        $periodoAcademico->Estatus = $request->input('Estatus');

        $periodoAcademico->save();

        return redirect()->route('periodoacademico.index');


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
        PeriodoAcademico::destroy($id);
        
        return redirect()->route('periodoacademico.index');

    }
}
