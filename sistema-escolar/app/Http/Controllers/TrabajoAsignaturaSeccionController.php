<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrabajoAsignaturaSeccion;

class TrabajoAsignaturaSeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trabajoAsignaturaSeccion = TrabajoAsignaturaSeccion::get();
        return view('trabajoAsignaturaSeccion.index')->with('trabajoAsignaturaSeccion', $trabajoAsignaturaSeccion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trbajoAsignaturaSeccion.index');
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
        $trabajoAsignaturaSeccion =  new TrabajoAsignaturaSeccion;
        $trabajoAsignaturaSeccion->TrabajoAsigId =  $request->input('TrabajoAsignId');
        $trabajoAsignaturaSeccion->TrabajoId = $request->input('TrabajoId');
        $trabajoAsignaturaSeccion->AsignaturaSeccionId = $request->input('AsignaturaSeccionId');
        $trabajoAsignaturaSeccion->save();

        return redirect()->route('trabajoasignaturaseccion.index');
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
        $trabajoAsignaturaSeccion = TrabajoAsignaturaSeccion::find($id);
        return view('trabajoAsignaturaSeccion.edit')->with('trabajoAsignaturaSeccion', $trabajoAsignaturaSeccion);

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
        $trabajoAsignaturaSeccion = TrabajoAsignaturaSeccion::find($id);
        $trabajoAsignaturaSeccion->TrabajoAsigId =  $request->input('TrabajoAsignId');
        $trabajoAsignaturaSeccion->TrabajoId = $request->input('TrabajoId');
        $trabajoAsignaturaSeccion->AsignaturaSeccionId = $request->input('AsignaturaSeccionId');
        $trabajoAsignaturaSeccion->save();

        return redirect()->route('trabajoasignaturaseccion.index');
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
        TrabajoAsignaturaSeccion::destroy($id);
        return redirect()->route('trabajoasignaturaseccion.index');

    }
}
