<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aula;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){ //Método constructor
        $this->middleware('auth');
        $this->middleware('permission:aula.index')->only('index');
        /**$this->middleware('permission:aula.create')->only('create');
        $this->middleware('permission:aula.destroy')->only('destroy');
        $this->middleware('permission:aula.show')->only('show');
        $this->middleware('permission:aula.update')->only('update');**/
        
    }
    public function index()
    {
        //
        $aula = Aula::get();
        return view('aula.index')->with('aula',$aula);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('aula.create');
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
        
        $aula = new Aula;
        $aula->EdificioId = $request->input('EdificioId');
        $aula->save();
        return redirect()->route('aula.index');
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
        $aula = Aula::find($id);
        return view('aula.edit')->width('aula',$aula);
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
        $aula = Aula::find($id);
        
        $aula->EdificioId = $request->input('EdificioId');
        $aula->save();
        return redirect()->route('aula.index');
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
        Aula::destroy($id);
        return redirect()->route('aula.index');

    }
}
