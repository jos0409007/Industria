<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docente;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $docente = Docente::get();
        return view('docente.index')->with('docente',$docente);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('docente.create');
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
        $docente = new Docente;
        $docente->DocenteId = $request->input('DocenteId');
        $docente->Titulo = $request->input('Titulo');
        $docente->TipoDocente = $request->input('TipoDocente');
        $docente->FechaIngres =  $request->input('FechaIngreso');
        $docente->Estatus = $request->input('Estatus');

        $docente->save();
        return redirect()->route('docente.index');

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
        $docente = Docente::find($id);
        return view('docente.edit')->with('docente',$docente);
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

        $docente = Docente::find($id);
        $docente->DocenteId = $request->input('DocenteId');
        $docente->Titulo = $request->input('Titulo');
        $docente->TipoDocente = $request->input('TipoDocente');
        $docente->FechaIngres =  $request->input('FechaIngreso');
        $docente->Estatus = $request->input('Estatus');

        $docente->save();
        return redirect()->route('docente.index');

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
        Docente::destroy($id);
        return redirect()->route('docente.index');

    }
}
