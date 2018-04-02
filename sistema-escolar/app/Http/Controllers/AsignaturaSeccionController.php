<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsignaturaSeccion;

class AsignaturaSeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $asignaturaSeccion = AsignaturaSeccion::get();
        return view('asignaturaSeccion.index')->with('asignaturaSeccion',$asignaturaSeccion);
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
        $asignaturaSeccion = new AsignaturaSeccion;
        $asignaturaSeccion->AsignaturaSeccionId = $request->input('AsignaturaSeccionId');
        $asignaturaSeccion->CicloAsignaturaId = $request->input('CicloAsignaturaId');
        $asignaturaSeccion->SeccionId = $request->input('SeccionId');
        $asignaturaSeccion->AulaId = $request->input('AulaId');
        $asignaturaSeccion->HoraInicio = $request->input('HoraInicio');
        $asignaturaSeccion->HoraFin =  $request->input('HoraFin');
        $asignaturaSeccion->DocenteAsignaturaId = $request->input('DocenteAsignaturaId');

        $asignaturaSeccion->save();
        return redirect()->route('asignaturaseccion.index');
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
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $asignaturaSeccion = AsignaturaSeccion::find($id);
        return view('asignaturaSeccion.edit')->with('asignaturaSeccion',$asignaturaSeccion);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $asignaturaSeccion = AsignaturaSeccion::find($id);
        $asignaturaSeccion->AsignaturaSeccionId = $request->input('AsignaturaSeccionId');
        $asignaturaSeccion->CicloAsignaturaId = $request->input('CicloAsignaturaId');
        $asignaturaSeccion->SeccionId = $request->input('SeccionId');
        $asignaturaSeccion->AulaId = $request->input('AulaId');
        $asignaturaSeccion->HoraInicio = $request->input('HoraInicio');
        $asignaturaSeccion->HoraFin =  $request->input('HoraFin');
        $asignaturaSeccion->DocenteAsignaturaId = $request->input('DocenteAsignaturaId');

        $asignaturaSeccion->save();
        return redirect()->route('asignaturaseccion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        AsignaturaSeccion::destroy($id);
        return redirect()->route('asignaturaseccion.index');
    }
}
