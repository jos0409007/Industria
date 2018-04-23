<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeccionAlumnoParcial;

class SeccionAlumnoParcialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seccionAlumnoParcialParcial = SeccionAlumnoParcial::get();
        return view('seccionAlumnoParcial.index')->with('seccionAlumno', $seccionAlumnoParcialParcial);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('seccionAlumnoParcial.create');
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
        $seccionAlumnoParcialParcial = new SeccionAlumnoParcial;
        $seccionAlumnoParcialParcial->SeccionAlumParcialId = $request->input('SeccionAlumParcialId');
        $seccionAlumnoParcialParcial->SeccionAlumnoId = $request->input('SeccionAlumnoId');
        $seccionAlumnoParcialParcial->ParcialId = $request->input('ParcialId');
        $seccionAlumnoParcialParcial->NotaTrabajo = $request->input('NotaTrabajo');
        $seccionAlumnoParcial->NotaExamen = $request->input('NotaExamen');
        $seccionAlumnoParcial->NotaTotal = $request->input('NotaTotal');
        $seccionAlumnoParcial->Estatus = $request->input('Estatus');

        $seccionAlumnoParcial->save();
        return redirect()->route('seccionalumnoparcial.index');

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
        $seccionAlumnoParcial = SeccionAlumnoParcial::find($id);
        return view('seccionAlumnoParcial.edit')->with('seccionAlumno',$seccionAlumnoParcial);
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
        $seccionAlumnoParcial = SeccionAlumnoParcial::find($id);

        $seccionAlumnoParcial->SeccionAlumParcialId = $request->input('SeccionAlumParcialId');
        $seccionAlumnoParcial->SeccionAlumnoId = $request->input('SeccionAlumnoId');
        $seccionAlumnoParcial->ParcialId = $request->input('ParcialId');
        $seccionAlumnoParcial->NotaTrabajo = $request->input('NotaTrabajo');
        $seccionAlumnoParcial->NotaExamen = $request->input('NotaExamen');
        $seccionAlumnoParcial->NotaTotal = $request->input('NotaTotal');
        $seccionAlumnoParcial->Estatus = $request->input('Estatus');

        $seccionAlumnoParcial->save();
        return redirect()->route('seccionalumnoparcial.index');


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

        SeccionAlumnoParcial::destroy($id);
        return redirect()->route('seccionalumnoparcial.index');

    }
}
