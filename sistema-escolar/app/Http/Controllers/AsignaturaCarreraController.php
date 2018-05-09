<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AsignaturaCarrera;
use Illuminate\Support\Facades\DB;
use App\Asignatura;
use App\Carrera;

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
        $consulta = DB::table('tbl_AsignaturaCarrera as ac')
        ->select('ac.AsignaturaCarreraId', 'ac.AsignaturaId', 'ac.CarreraId', 'a.Nombre as Asignatura', 'c.Nombre as Carrera')
        ->join('tbl_Asignatura as a', 'ac.AsignaturaId', '=', 'a.AsignaturaId')
        ->join('tbl_Carrera as c', 'ac.CarreraId', '=', 'c.CarreraId')->get();
  
        $asignaturas = Asignatura::get();
        $carreras = Carrera::get();
        //dd($asignaturas);
        return view('asignaturacarrera.index',['asignaturaCarrera' => $asignaturaCarrera, 
        'asignaturas' => $asignaturas, 'carreras' => $carreras, 'consulta' => $consulta]);
        
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
        $asignaturaCarrera->AsignaturaCarreraId = $request->input('AsignaturaId').$request->input('CarreraId');
        $asignaturaCarrera->AsignaturaId = $request->input('AsignaturaId');
        $asignaturaCarrera->CarreraId = $request->input('CarreraId');
        $asignaturaCarrera->save();

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
        $asignaturaCarrera->AsignaturaCarreraId = $request->input('AsignaturaCarreraId');
        $asignaturaCarrera->AsignaturaId = $request->input('AsignaturaId');
        $asignaturaCarrera->CarreraId = $request->input('CarreraId');
        $asignaturaCarrera->save();
        
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
