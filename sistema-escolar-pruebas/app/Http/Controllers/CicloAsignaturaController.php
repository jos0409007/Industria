<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CicloAsignatura;

class CicloAsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cicloAsignatura = CicloAsignatura::get();
        return view('cicloasignatura.index')->with('cicloAsignatura',$cicloAsignatura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cicloAsignatura.create');
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
        $cicloAsignatura = new CicloAsignatura;
        $cicloAsignatura->AsignaturaCarreraId = $request->input('AsignaturaCarreraId');
        $cicloAsignatura->CicloId = $request->input('CicloId');
        $cicloAsignatura->save();

        return redirect()->route('cicloasignatura.index');
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
        $cicloAsignatura = CicloAsignatura::find($id);
        return view('cicloAsignatura.edit')->width('cicloAsignatura',$cicloAsignatura);
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
        $cicloAsignatura = CicloAsignatura::find($id);
        
        $cicloAsignatura->AsignaturaCarreraId = $request->input('AsignaturaCarreraId');
        $cicloAsignatura->CicloId = $request->input('CicloId');
        $cicloAsignatura->save();

        return redirect()->route('cicloasignatura.index');

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

        CicloAsignatura::destroy($id);
        
        return redirect()->route('cicloasignatura.index');

    }
}
