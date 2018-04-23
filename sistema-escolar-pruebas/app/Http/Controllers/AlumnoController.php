<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alumno = Alumno::get();
        return view('alumno.index')->with('alumno',$alumno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alumno.create');
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
        $alumno = new Alumno;
        $alumno->AlumnoId = $request->input('AlumnoId');
        $alumno->Beca = $request->input('Beca');
        $alumno->PorcentajeBeca = $request->input('PorcentajeBeca');
        $alumno->TutorId = $request->inpunt('TutorId');
        $alumno->CarreraId = $request->input('CarreraId');
        $alumno->Estatus = $request->input('Estatus');

        $alumno->save();
        return redirect()->route('alumno.index');

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
        $alumno = Alumno::find($id);
        return view('alumno.edit')->with('alumno',$alumno);
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
        $alumno = Alumno::find($id);
        $alumno->AlumnoId = $request->input('AlumnoId');
        $alumno->Beca = $request->input('Beca');
        $alumno->PorcentajeBeca = $request->input('PorcentajeBeca');
        $alumno->TutorId = $request->inpunt('TutorId');
        $alumno->CarreraId = $request->input('CarreraId');
        $alumno->Estatus = $request->input('Estatus');

        $alumno->save();
        return redirect()->route('alumno.index');

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
        Alumno::destroy($id);
        return redirect()->route('alumno.index');

    }
}
