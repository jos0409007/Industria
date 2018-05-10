<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Permission;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos1 = Permission::get();
        $permisos = Permission::paginate(25);
        return view('permisos.index')->with('permisos', $permisos)->with('permisos1', $permisos1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permisos = new Permission;
        $permisos->name = $request->input('name');
        $permisos->slug = $request->input('slug');
        $permisos->description = $request->input('description');

        $permisos->save();

        return redirect()->route('permiso.index');
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
        $permisos = Permission::findorFail($id);
        if ($permisos){
            
            return view('permisos.editar')->with('permisos', $permisos);

        }
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
        $permisos = Permission::findOrFail($id);
        $permisos->name = $request->input('name');
        $permisos->slug = $request->input('slug');
        $permisos->description = $request->input('description');
        $permisos->save();

        return redirect()->route('permiso.index');
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
    }
}
