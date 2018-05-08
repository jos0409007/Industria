<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignatura;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asignaturas = Asignatura::get();
        return view('asignatura.index')->with('asignaturas',$asignaturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('asignatura.create');
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
        $asignatura = new Asignatura;
        $asignatura->Nombre = $request->input('Nombre');
        $asignatura->Especialidad = $request->input('EspecialidadId');
        $asignatura->Unidadvalorativa = $request->input('UnidadValorativa');

        $asignatura->save();
        return redirect()->route('asignatura.index');
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
        $asignatura = Asignatura::find($id);
        return view('asignatura.edit')->with('asignatura',$asignatura);
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
        $asignatura = Asignatura::find($id);

        $asignatura->Nombre = $request->input('Nombre');
        $asignatura->Especialidad = $request->input('EspecialidadId');
        $asignatura->Unidadvalorativa = $request->input('UnidadValorativa');

        $asignatura->save();
        return redirect()->route('asignatura.index');

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
        Asignatura::destroy($id);
        return redirect()->route('asignatura.index');
    }
}
