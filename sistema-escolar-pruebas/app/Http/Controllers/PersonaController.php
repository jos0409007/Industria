<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $persona = Persona::get();
        return view('persona.index')->with('persona',$persona);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('persona.create');
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
        $persona =  new Persona;
        $persona->PersonaId = $request->input('PersonaId');
        $persona->Nombre = $request->input('Nombres');
        $persona->Apellido = $request->input('Apellido');
        $persona->Sexo = $request->input('Sexo');
        $persona->FechaNacimiento = $request->input('FechaNacimiento');
        $persona->Edad = $request->input('Edad');
        $persona->CorreoElectronico->input('CorreoElectronico');
        $persona->telefono = $request->input('telefono');

        $persona->save();
        return redirect()->route('persona.index');


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
        $persona = Persona::find($id);
        return view('persona.edit')->with('persona',$persona);

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
        $persona = Persona::find($id);
        $persona->PersonaId = $request->input('PersonaId');
        $persona->Nombre = $request->input('Nombres');
        $persona->Apellido = $request->input('Apellido');
        $persona->Sexo = $request->input('Sexo');
        $persona->FechaNacimiento = $request->input('FechaNacimiento');
        $persona->Edad = $request->input('Edad');
        $persona->CorreoElectronico->input('CorreoElectronico');
        $persona->telefono = $request->input('telefono');

        $persona->save();
        return redirect()->route('persona.index');

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
        Persona::destroy($id);
        return redirect()->route('persona.index');

    }
}
