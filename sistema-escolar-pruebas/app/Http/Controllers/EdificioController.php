<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edificio;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $edificio = Edificio::get();
        return view('edificio.index')->with('edificio',$edificio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('edificio.create');
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
        $edificio = new Edificio;
        $edificio->Nombre = $request->input('Nombre');
        $edificio->Descripcion = $request->input('Descripcion');
        $edificio->save();

        return redirect()->route('edificio.index');
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

        $edificio = Edificio::find($id);
        return view('edificio.edit')->with('edificio',$edificio);

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
        $edificio = Edificio::find($id);
        $edificio->Nombre = $request->input('Nombre');
        $edificio->Descripcion = $request->input('Descripcion');
        $edificio->save();

        return redirect()->route('edificio.index');

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

        Edificio::destroy($id);
        return redirect()->route('edificio.index');

    }
}
