<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeccionAlumno;

class SeccionAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seccionalumno = SeccionAlumno::get();
        return view('seccionAlumno.index')->with('seccionAlumno',$seccionalumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('seccionAlumno.create');
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
        $seccionalumno = new Seccionalumno;
        $seccionalumno->SeccionAlumnoId = $request->input('SeccionAlumnoId');
        $seccionalumno->AlumnoId = $request->input('AlumnoId');
        $seccionalumno->AsignaturaSeccionId = $request->input('AsignaturaSeccionId');
        $seccionalumno->Promedio = $request->input('Promedio');
        $seccionalumno->Estatus = $request->input('Estatus');

        $seccionalumno->save();
        return redirect()->route('seccionAlumno.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
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
        $seccionalumno = Seccionalumno::find($id);
        return view('seccionAlumno.edit')->with('seccionAlumno',$seccionalumno);
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
        $seccionalumno = Seccionalumno::find($id);
        $seccionalumno->SeccionAlumnoId = $request->input('SeccionAlumnoId');
        $seccionalumno->AlumnoId = $request->input('AlumnoId');
        $seccionalumno->AsignaturaSeccionId = $request->input('AsignaturaSeccionId');
        $seccionalumno->Promedio = $request->input('Promedio');
        $seccionalumno->Estatus = $request->input('Estatus');

        $seccionalumno->save();
        return redirect()->route('seccionAlumno.index');

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
        SeccionAlumno::destroy($id);
        return redirect()->route('seccionAlumno.index');

    }
}
