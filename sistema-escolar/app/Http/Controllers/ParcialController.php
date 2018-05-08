<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parcial;
use App\CicloLectivo;
use Illuminate\Support\Facades\DB;

class ParcialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consulta = DB::table('tbl_Parcial as p')->orderBy('p.ParcialId', 'DESC')
        ->select('p.ParcialId','p.Descripcion','p.FechaInicio', 'p.FechaFin', 'p.Estatus', 'c.Descripcion as cicloDesc')
        ->join('tbl_cicloLectivo as c', 'p.CicloId', '=', 'c.CicloId')->get();
        $parciales = Parcial::get();
        
        $ciclos = CicloLectivo::get();
        return view('parcial.index',['parciales' => $parciales, 'consulta' => $consulta, 'ciclos' => $ciclos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('parcial.create');
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
       // dd($request->input('CicloId'));
        $parcial = new Parcial;
        $parcial->CicloId = $request->input('CicloId');
        $parcial->Descripcion = $request->input('Descripcion');
        $parcial->FechaInicio = $request->input('FechaInicio');
        $parcial->FechaFin = $request->input('FechaFin');
        $parcial->Estatus = $request->input('Estatus');

        $parcial->save();
        
        return redirect()->route('parcial.index');

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
        $parcial = Parcial::find($id);
        return view('parcial.edit')->with('parcia',$parcial);
        

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
        
        $parcial = Parcial::find($id);
        $parcial->CicloId = $request->input('CicloId');
        $parcial->Descripcion = $request->input('Descripcion');
        $parcial->FechaInicio = $request->input('FechaInicio');
        $parcial->FechaFin = $request->input('FechaFin');
        $parcial->Estatus = $request->input('Estatus');

        $parcial->save();
        
        return redirect()->route('parcial.index');


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
        Parcial::destroy($id);
        return redirect()->route('parcial.index');


    }
}
