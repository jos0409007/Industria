<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsignaturaCarrera;

class AsignaturaCarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $asignaturaCarrera = AsignaturaCarrera::get();
        return view('asignaturaCarrera.index')->with('asignaturaCarrera',$asignaturaCarrera);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('asignaturaCarrera.create');
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
        $asignaturaCarrera = new AsignaturaCarrera;
        $asignaturaCarrera->AsignaturaCarreraId = $request->index('AsignaturaCarreraId');
        $asignaturaCarrera->AsignaturaId = $request->index('AsignaturaId');
        $asignaturaCarrera->CarreraId = $request->index('CarreraId');

        return redirect()->route('asignaturacarrera.index');
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
        $asignaturaCarrera = AsignaturaCarrera::find($id);
        return view('asignaturaCarrera.edit')->with('asignaturaCarrera',$asignaturaCarrera);
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
        $asignaturaCarrera = AsignaturaCarrera::find($id);
        $asignaturaCarrera->AsignaturaCarreraId = $request->index('AsignaturaCarreraId');
        $asignaturaCarrera->AsignaturaId = $request->index('AsignaturaId');
        $asignaturaCarrera->CarreraId = $request->index('CarreraId');

        return redirect()->route('asignaturacarrera.index');


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

        AsignaturaCarrera::destroy($id);
        return redirect()->route('asignaturacarrera.index');

    }
}
