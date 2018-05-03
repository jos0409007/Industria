<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/iniciar-sesion', function () {
    return view('Iniciar');
});

Route::get('/prueba', function(){
    return view('prueba');
});

Route::get('periodo', function(){
     return redirect()->route('periodoacademico.index');
});
Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

Route::resource('alumno', 'AlumnoController');
Route::resource('asignaturacarrera', 'AsignaturaCarreraController');
Route::resource('asignatura', 'AsignaturaController');
Route::resource('asignaturaseccion', 'AsignaturaSeccionController');
Route::resource('aula', 'AulaController');
Route::resource('carrera', 'CarreraController');
Route::resource('cicloasignatura', 'CicloAsignaturaController');
Route::resource('ciclolectivo', 'CicloLectivoController');
Route::resource('docenteasignatura', 'DocenteAsignaturaController');
Route::resource('docente', 'DocenteController');
Route::resource('docenteespecialidad', 'DocenteEspecialidadController');
Route::resource('edificio', 'EdificioController');
Route::resource('especialidad', 'EspecialidadController');
Route::resource('parcial', 'ParcialController');
Route::resource('periodoacademico', 'PeriodoAcademicoController');
Route::resource('persona', 'PersonaController');
Route::resource('seccionalumno', 'SeccionAlumnoController');
Route::resource('seccionalumnoparcial', 'SeccionAlumnoParcialController');
Route::resource('seccion', 'SeccionController');
Route::resource('trabajoalumnodetalle', 'TrabajoAlumnoDetalleController');
Route::resource('trabajoasignaturaseccion', 'TrabajoAsignaturaSeccionController');
Route::resource('trabajo', 'TrabajoController');
Route::resource('usuario', 'UsuarioController');

