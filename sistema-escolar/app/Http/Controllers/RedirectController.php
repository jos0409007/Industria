<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use App\Docente;
use App\Alumno;
use App\Seccion;
use App\CicloLectivo;
use App\PeriodoAcademico;
use App\Especialidad;
use App\Aula;
use App\Edificio;

class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //
        $usuarios = User::get();
        $roles = Role::get();
        $permisos = Permission::get();
        return view('vendor.adminlte.home')->with('usuarios',$usuarios)
        ->with('roles',$roles)->with('permisos',$permisos);
    }


}