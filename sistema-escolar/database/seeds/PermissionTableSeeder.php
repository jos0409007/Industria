<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //-------------------Para el rol de Administración----------------------------
        //Sección
        Permission::create([
            'name'          => 'Navegar secciones',
            'slug'          => 'seccion.index',
            'description'   => 'Muestra todas las secciones del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear sección',
            'slug'          => 'seccion.create',
            'description'   => 'Muestra el formulario de creación de una sección',
        ]);
        Permission::create([
            'name'          => 'Eliminar sección',
            'slug'          => 'seccion.destroy',
            'description'   => 'Elimina cualquier sección del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de sección',
            'slug'          => 'seccion.show',
            'description'   => 'Muestra los detalles de una sección',
        ]);
        Permission::create([
            'name'          => 'Actualizar sección',
            'slug'          => 'seccion.update',
            'description'   => 'Actualiza cualquier sección del sistema',
        ]);

        //Ciclo lectivo
        Permission::create([
            'name'          => 'Navegar ciclos lectivos',
            'slug'          => 'ciclolectivo.index',
            'description'   => 'Muestra todos los ciclos lectivos del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear ciclo lectivo',
            'slug'          => 'ciclolectivo.create',
            'description'   => 'Muestra el formulario de creación de un ciclo lectivo',
        ]);
        Permission::create([
            'name'          => 'Eliminar ciclo lectivo',
            'slug'          => 'ciclolectivo.destroy',
            'description'   => 'Elimina cualquier ciclo lectivo del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de ciclo lectivo',
            'slug'          => 'ciclolectivo.show',
            'description'   => 'Muestra los detalles de un ciclo lectivo',
        ]);
        Permission::create([
            'name'          => 'Actualizar ciclo lectivo',
            'slug'          => 'ciclolectivo.update',
            'description'   => 'Actualiza cualquier ciclo lectivo del sistema',
        ]);     
        
        //Periodo académico
        Permission::create([
            'name'          => 'Navegar periodos académicos',
            'slug'          => 'periodoacademico.index',
            'description'   => 'Muestra todos los periodos académicos del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear periodo académico',
            'slug'          => 'periodoacademico.create',
            'description'   => 'Muestra el formulario de creación de un periodo académico',
        ]);
        Permission::create([
            'name'          => 'Eliminar periodo académico',
            'slug'          => 'periodoacademico.destroy',
            'description'   => 'Elimina cualquier periodo académico del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de periodo académico',
            'slug'          => 'periodoacademico.show',
            'description'   => 'Muestra los detalles de un periodo académico',
        ]);
        Permission::create([
            'name'          => 'Actualizar periodo académico',
            'slug'          => 'periodoacademico.update',
            'description'   => 'Actualiza cualquier periodo académico del sistema',
        ]);

        //Especialidad
        Permission::create([
            'name'          => 'Navegar especialidades',
            'slug'          => 'especialidad.index',
            'description'   => 'Muestra todas las especialidades del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear especialidad',
            'slug'          => 'especialidad.create',
            'description'   => 'Muestra el formulario de creación de una especialidad',
        ]);
        Permission::create([
            'name'          => 'Eliminar especialidad',
            'slug'          => 'especialidad.destroy',
            'description'   => 'Elimina cualquier especialidad del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de especialidad',
            'slug'          => 'especialidad.show',
            'description'   => 'Muestra los detalles de una especialidad',
        ]);
        Permission::create([
            'name'          => 'Actualizar especialidad',
            'slug'          => 'especialidad.update',
            'description'   => 'Actualiza cualquier especialidad del sistema',
        ]);      
        
        //Docente
        Permission::create([
            'name'          => 'Navegar docentes',
            'slug'          => 'docente.index',
            'description'   => 'Muestra todos los docente del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear docente',
            'slug'          => 'docente.create',
            'description'   => 'Muestra el formulario de creación de un docente',
        ]);
        Permission::create([
            'name'          => 'Eliminar docente',
            'slug'          => 'docente.destroy',
            'description'   => 'Elimina cualquier docente del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de docente',
            'slug'          => 'docente.show',
            'description'   => 'Muestra los detalles de un docente',
        ]);
        Permission::create([
            'name'          => 'Actualizar docente',
            'slug'          => 'docente.update',
            'description'   => 'Actualiza cualquier docente del sistema',
        ]); 

        //Alumno
        Permission::create([
            'name'          => 'Navegar alumnos',
            'slug'          => 'alumno.index',
            'description'   => 'Muestra todos los alumnos del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear alumno',
            'slug'          => 'alumno.create',
            'description'   => 'Muestra el formulario de creación de un alumno',
        ]);
        Permission::create([
            'name'          => 'Eliminar alumno',
            'slug'          => 'alumno.destroy',
            'description'   => 'Elimina cualquier alumno del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de alumno',
            'slug'          => 'alumno.show',
            'description'   => 'Muestra los detalles de un alumno',
        ]);
        Permission::create([
            'name'          => 'Actualizar alumno',
            'slug'          => 'alumno.update',
            'description'   => 'Actualiza cualquier alumno del sistema',
        ]);
        //-------------------Para el rol de Docente----------------------------
        //Trabajo
        Permission::create([
            'name'          => 'Navegar trabajos',
            'slug'          => 'trabajo.index',
            'description'   => 'Muestra todos los trabajos del sistema',
        ]);
        Permission::create([
            'name'          => 'Crear trabajo',
            'slug'          => 'trabajo.create',
            'description'   => 'Muestra el formulario de creación de un trabajo',
        ]);
        Permission::create([
            'name'          => 'Eliminar trabajo',
            'slug'          => 'trabajo.destroy',
            'description'   => 'Elimina cualquier trabajo del sistema',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de trabajo',
            'slug'          => 'trabajo.show',
            'description'   => 'Muestra los detalles de un trabajo',
        ]);
        Permission::create([
            'name'          => 'Actualizar trabajo',
            'slug'          => 'trabajo.update',
            'description'   => 'Actualiza cualquier trabajo del sistema',
        ]);
        //----------------------------------------------------------------------------------------
        //Asignaturacarrera
        Permission::create([
            'name'          => 'Navegar la tabla asignaturacarrera',
            'slug'          => 'asignaturacarrera.index',
            'description'   => 'Muestra todos los datos de asignaturacarrera',
        ]);
        Permission::create([
            'name'          => 'Crear asignaturacarrera',
            'slug'          => 'asignaturacarrera.create',
            'description'   => 'Muestra el formulario de creación para asignaturacarrera',
        ]);
        Permission::create([
            'name'          => 'Eliminar asignaturacarrera',
            'slug'          => 'asignaturacarrera.destroy',
            'description'   => 'Elimina asignaturacarrera',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de asignaturacarrera',
            'slug'          => 'asignaturacarrera.show',
            'description'   => 'Muestra los detalles de asignaturacarrera',
        ]);
        Permission::create([
            'name'          => 'Actualizar asignaturacarrera',
            'slug'          => 'asignaturacarrera.update',
            'description'   => 'Actualiza asignaturacarrera',
        ]);
        //Asignaturaseccion
        Permission::create([
            'name'          => 'Navegar la tabla asignaturaseccion',
            'slug'          => 'asignaturaseccion.index',
            'description'   => 'Muestra todos los datos de asignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Crear asignaturaseccion',
            'slug'          => 'asignaturaseccion.create',
            'description'   => 'Muestra el formulario de creación para asignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Eliminar asignaturaseccion',
            'slug'          => 'asignaturaseccion.destroy',
            'description'   => 'Elimina asignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de asignaturaseccion',
            'slug'          => 'asignaturaseccion.show',
            'description'   => 'Muestra los detalles de asignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Actualizar asignaturaseccion',
            'slug'          => 'asignaturaseccion.update',
            'description'   => 'Actualiza asignaturaseccion',
        ]);
        //cicloasignatura
        Permission::create([
            'name'          => 'Navegar la tabla cicloasignatura',
            'slug'          => 'cicloasignatura.index',
            'description'   => 'Muestra todos los datos de cicloasignatura',
        ]);
        Permission::create([
            'name'          => 'Crear cicloasignatura',
            'slug'          => 'cicloasignatura.create',
            'description'   => 'Muestra el formulario de creación para cicloasignatura',
        ]);
        Permission::create([
            'name'          => 'Eliminar cicloasignatura',
            'slug'          => 'cicloasignatura.destroy',
            'description'   => 'Elimina cicloasignatura',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de cicloasignatura',
            'slug'          => 'cicloasignatura.show',
            'description'   => 'Muestra los detalles de cicloasignatura',
        ]);
        Permission::create([
            'name'          => 'Actualizar cicloasignatura',
            'slug'          => 'cicloasignatura.update',
            'description'   => 'Actualiza cicloasignatura',
        ]);
        //docenteasignatura
        Permission::create([
            'name'          => 'Navegar la tabla docenteasignatura',
            'slug'          => 'docenteasignatura.index',
            'description'   => 'Muestra todos los datos de docenteasignatura',
        ]);
        Permission::create([
            'name'          => 'Crear docenteasignatura',
            'slug'          => 'docenteasignatura.create',
            'description'   => 'Muestra el formulario de creación para docenteasignatura',
        ]);
        Permission::create([
            'name'          => 'Eliminar docenteasignatura',
            'slug'          => 'docenteasignatura.destroy',
            'description'   => 'Elimina docenteasignatura',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de docenteasignatura',
            'slug'          => 'docenteasignatura.show',
            'description'   => 'Muestra los detalles de docenteasignatura',
        ]);
        Permission::create([
            'name'          => 'Actualizar docenteasignatura',
            'slug'          => 'docenteasignatura.update',
            'description'   => 'Actualiza docenteasignatura',
        ]);
        //docenteespecialidad
        Permission::create([
            'name'          => 'Navegar la tabla docenteespecialidad',
            'slug'          => 'docenteespecialidad.index',
            'description'   => 'Muestra todos los datos de docenteespecialidad',
        ]);
        Permission::create([
            'name'          => 'Crear docenteespecialidad',
            'slug'          => 'docenteespecialidad.create',
            'description'   => 'Muestra el formulario de creación para docenteespecialidad',
        ]);
        Permission::create([
            'name'          => 'Eliminar docenteespecialidad',
            'slug'          => 'docenteespecialidad.destroy',
            'description'   => 'Elimina docenteespecialidad',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de docenteespecialidad',
            'slug'          => 'docenteespecialidad.show',
            'description'   => 'Muestra los detalles de docenteespecialidad',
        ]);
        Permission::create([
            'name'          => 'Actualizar docenteespecialidad',
            'slug'          => 'docenteespecialidad.update',
            'description'   => 'Actualiza docenteespecialidad',
        ]);
        //asignatura
        Permission::create([
            'name'          => 'Navegar la tabla asignatura',
            'slug'          => 'asignatura.index',
            'description'   => 'Muestra todas las asignaturas',
        ]);
        Permission::create([
            'name'          => 'Crear asignatura',
            'slug'          => 'asignatura.create',
            'description'   => 'Muestra el formulario de creación de asignatura',
        ]);
        Permission::create([
            'name'          => 'Eliminar asignatura',
            'slug'          => 'asignatura.destroy',
            'description'   => 'Elimina la asignatura',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de asignatura',
            'slug'          => 'asignatura.show',
            'description'   => 'Muestra los detalles de una asignatura',
        ]);
        Permission::create([
            'name'          => 'Actualizar asignatura',
            'slug'          => 'asignatura.update',
            'description'   => 'Actualiza una asignatura',
        ]);
        //aula
        Permission::create([
            'name'          => 'Navegar la tabla aula',
            'slug'          => 'aula.index',
            'description'   => 'Muestra todas las aulas',
        ]);
        Permission::create([
            'name'          => 'Crear aula',
            'slug'          => 'aula.create',
            'description'   => 'Muestra el formulario de creación de aula',
        ]);
        Permission::create([
            'name'          => 'Eliminar aula',
            'slug'          => 'aula.destroy',
            'description'   => 'Elimina el aula',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de aula',
            'slug'          => 'aula.show',
            'description'   => 'Muestra los detalles de un aula',
        ]);
        Permission::create([
            'name'          => 'Actualizar aula',
            'slug'          => 'aula.update',
            'description'   => 'Actualiza un aula',
        ]);
        //carrera
        Permission::create([
            'name'          => 'Navegar la tabla carrera',
            'slug'          => 'carrera.index',
            'description'   => 'Muestra todas las carreras',
        ]);
        Permission::create([
            'name'          => 'Crear carrera',
            'slug'          => 'carrera.create',
            'description'   => 'Muestra el formulario de creación de carrera',
        ]);
        Permission::create([
            'name'          => 'Eliminar carrera',
            'slug'          => 'carrera.destroy',
            'description'   => 'Elimina la carrera',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de carrera',
            'slug'          => 'carrera.show',
            'description'   => 'Muestra los detalles de una carrera',
        ]);
        Permission::create([
            'name'          => 'Actualizar carrera',
            'slug'          => 'carrera.update',
            'description'   => 'Actualiza una carrera',
        ]);
        //edificio
        Permission::create([
            'name'          => 'Navegar la tabla edificio',
            'slug'          => 'edificio.index',
            'description'   => 'Muestra todos los edificios',
        ]);
        Permission::create([
            'name'          => 'Crear edificio',
            'slug'          => 'edificio.create',
            'description'   => 'Muestra el formulario de creación de edificio',
        ]);
        Permission::create([
            'name'          => 'Eliminar edificio',
            'slug'          => 'edificio.destroy',
            'description'   => 'Elimina el edificio',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de edificio',
            'slug'          => 'edificio.show',
            'description'   => 'Muestra los detalles de un edificio',
        ]);
        Permission::create([
            'name'          => 'Actualizar edificio',
            'slug'          => 'edificio.update',
            'description'   => 'Actualiza un edificio',
        ]);
        //parcial
        Permission::create([
            'name'          => 'Navegar la tabla parcial',
            'slug'          => 'parcial.index',
            'description'   => 'Muestra todos los parciales',
        ]);
        Permission::create([
            'name'          => 'Crear parcial',
            'slug'          => 'parcial.create',
            'description'   => 'Muestra el formulario de creación de parcial',
        ]);
        Permission::create([
            'name'          => 'Eliminar parcial',
            'slug'          => 'parcial.destroy',
            'description'   => 'Elimina el parcial',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de parcial',
            'slug'          => 'parcial.show',
            'description'   => 'Muestra los detalles de un parcial',
        ]);
        Permission::create([
            'name'          => 'Actualizar parcial',
            'slug'          => 'parcial.update',
            'description'   => 'Actualiza un parcial',
        ]);
        //persona
        Permission::create([
            'name'          => 'Navegar la tabla persona',
            'slug'          => 'persona.index',
            'description'   => 'Muestra todas las persona',
        ]);
        Permission::create([
            'name'          => 'Crear persona',
            'slug'          => 'persona.create',
            'description'   => 'Muestra el formulario de creación de persona',
        ]);
        Permission::create([
            'name'          => 'Eliminar persona',
            'slug'          => 'persona.destroy',
            'description'   => 'Elimina la persona',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de persona',
            'slug'          => 'persona.show',
            'description'   => 'Muestra los detalles de una persona',
        ]);
        Permission::create([
            'name'          => 'Actualizar persona',
            'slug'          => 'persona.update',
            'description'   => 'Actualiza una persona',
        ]);
        //seccionalumno
        Permission::create([
            'name'          => 'Navegar la tabla seccionalumno',
            'slug'          => 'seccionalumno.index',
            'description'   => 'Muestra todos los datos de seccionalumno',
        ]);
        Permission::create([
            'name'          => 'Crear seccionalumno',
            'slug'          => 'seccionalumno.create',
            'description'   => 'Muestra el formulario de creación de seccionalumno',
        ]);
        Permission::create([
            'name'          => 'Eliminar seccionalumno',
            'slug'          => 'seccionalumno.destroy',
            'description'   => 'Elimina el registro en seccionalumno',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de seccionalumno',
            'slug'          => 'seccionalumno.show',
            'description'   => 'Muestra los detalles de un registro de seccionalumno',
        ]);
        Permission::create([
            'name'          => 'Actualizar seccionalumno',
            'slug'          => 'seccionalumno.update',
            'description'   => 'Actualiza un registro de seccionalumno',
        ]);
        //seccionalumnoparcial
        Permission::create([
            'name'          => 'Navegar la tabla seccionalumnoparcial',
            'slug'          => 'seccionalumnoparcial.index',
            'description'   => 'Muestra todos los datos de seccionalumnoparcial',
        ]);
        Permission::create([
            'name'          => 'Crear seccionalumnoparcial',
            'slug'          => 'seccionalumnoparcial.create',
            'description'   => 'Muestra el formulario de creación de seccionalumnoparcial',
        ]);
        Permission::create([
            'name'          => 'Eliminar seccionalumnoparcial',
            'slug'          => 'seccionalumnoparcial.destroy',
            'description'   => 'Elimina el registro en seccionalumnoparcial',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de seccionalumnoparcial',
            'slug'          => 'seccionalumnoparcial.show',
            'description'   => 'Muestra los detalles de un registro de seccionalumnoparcial',
        ]);
        Permission::create([
            'name'          => 'Actualizar seccionalumnoparcial',
            'slug'          => 'seccionalumnoparcial.update',
            'description'   => 'Actualiza un registro de seccionalumnoparcial',
        ]);
        //trabajoalumnodetalle
        Permission::create([
            'name'          => 'Navegar la tabla trabajoalumnodetalle',
            'slug'          => 'trabajoalumnodetalle.index',
            'description'   => 'Muestra todos los datos de trabajoalumnodetalle',
        ]);
        Permission::create([
            'name'          => 'Crear trabajoalumnodetalle',
            'slug'          => 'trabajoalumnodetalle.create',
            'description'   => 'Muestra el formulario de creación de trabajoalumnodetalle',
        ]);
        Permission::create([
            'name'          => 'Eliminar trabajoalumnodetalle',
            'slug'          => 'trabajoalumnodetalle.destroy',
            'description'   => 'Elimina el registro en trabajoalumnodetalle',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de trabajoalumnodetalle',
            'slug'          => 'trabajoalumnodetalle.show',
            'description'   => 'Muestra los detalles de un registro de trabajoalumnodetalle',
        ]);
        Permission::create([
            'name'          => 'Actualizar trabajoalumnodetalle',
            'slug'          => 'trabajoalumnodetalle.update',
            'description'   => 'Actualiza un registro de trabajoalumnodetalle',
        ]);
        //trabajoasignaturaseccion
        Permission::create([
            'name'          => 'Navegar la tabla trabajoasignaturaseccion',
            'slug'          => 'trabajoasignaturaseccion.index',
            'description'   => 'Muestra todos los datos de trabajoasignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Crear trabajoasignaturaseccion',
            'slug'          => 'trabajoasignaturaseccion.create',
            'description'   => 'Muestra el formulario de creación de trabajoasignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Eliminar trabajoasignaturaseccion',
            'slug'          => 'trabajoasignaturaseccion.destroy',
            'description'   => 'Elimina el registro en trabajoasignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Ver detalle de trabajoasignaturaseccion',
            'slug'          => 'trabajoasignaturaseccion.show',
            'description'   => 'Muestra los detalles de un registro de trabajoasignaturaseccion',
        ]);
        Permission::create([
            'name'          => 'Actualizar trabajoasignaturaseccion',
            'slug'          => 'trabajoasignaturaseccion.update',
            'description'   => 'Actualiza un registro de trabajoasignaturaseccion',
        ]);
    }
}
