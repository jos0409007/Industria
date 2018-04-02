<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocenteEspecialidad;

class DocenteEspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $docenteEspecialidad = DocenteEspecialidad::get();
        return view('docenteEspecialidad.index')->with('docenteEspecialidad',$docenteEspecialidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('docenteEspecialidad.create');
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
        $docenteEspecialidad = new DocenteEspecialidad;
        $docenteEspecialidad->DocenteEspecialidad = $request->input('DocenteEspecialidad');
        $docenteEspecialidad->DocenteId = $request->input('DocenteId');
        $docenteEspecialidad->EspecialidadId = $request->input('EspecialidadId');

        $docenteEspecialidad->save();

        return redirect()->route('docenteEspecialidad.index');
        
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
        $docenteEspecialidad = DocenteEspecialidad::find($id);
        return view('docenteEspecialidad.edit')->with('docenteEspecialidad',$docenteEspecialidad);
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
        $docenteEspecialidad = DocenteEspecialidad::find($id);
        $docenteEspecialidad->DocenteEspecialidad = $request->input('DocenteEspecialidad');
        $docenteEspecialidad->DocenteId = $request->input('DocenteId');
        $docenteEspecialidad->EspecialidadId = $request->input('EspecialidadId');

        $docenteEspecialidad->save();

        return redirect()->route('docenteEspecialidad.index');
        

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

        DocenteEspecialidad::destroy($id);
        return redirect()->route('docenteEspecialidad.index');
        

    }
}
