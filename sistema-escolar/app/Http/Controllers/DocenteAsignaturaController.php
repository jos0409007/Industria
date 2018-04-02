<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocenteAsignatura;

class DocenteAsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $docenteAsignatura = DocenteAsignatura::get();
        return view('docenteAsignatura.index')->with('docenteAsignatura',$docenteAsignatura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('docenteAsignatura.create');

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
        $docenteAsignatura = new DocenteAsignatura;
        $docenteAsignatura->DocenteAsignaturaId = $request->input('DocenteAsignaturaId');
        $docenteAsignatura->DocenteEspecialidadId = $request->input('DocenteEspecialidadId');
        $docenteAsignatura->AsignaturaId = $request->input('AsignaturaId');

        $docenteAsignatura->save();
        return redirect()->route('docenteasignatura.index');
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

        $docenteAsignatura = DocenteAsignatura::find($id);
        return view('docenteAsignatura.edit')->with('docenteAsignatura',$docenteAsignatura);

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
        $docenteAsignatura = DocenteAsignatura::find($id);
        $docenteAsignatura->DocenteAsignaturaId = $request->input('DocenteAsignaturaId');
        $docenteAsignatura->DocenteEspecialidadId = $request->input('DocenteEspecialidadId');
        $docenteAsignatura->AsignaturaId = $request->input('AsignaturaId');

        $docenteAsignatura->save();
        return redirect()->route('docenteasignatura.index');
        
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
        DocenteAsignatura::destroy($id);

        return redirect()->route('docenteasignatura.index');

    }
}
