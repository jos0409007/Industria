@extends('adminlte::layouts.app')

@section('main-content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
    <h1>Asignaturas por carrera</h1>
   
</div>
<div class="container">
    <h4>total de asignaturas: {{$asignaturaCarrera->count()}}</h4>
    <a class="btn btn-success " href="#" role="button" data-toggle="modal" data-target="#create">Nuevo</a>

    <br/>
    <br/>
</div>
<div class="box box-solid box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Asignaturas por carrera</h3>
    </div>
    <div class="box-body">
        <table id="tabla" class="table table-hover table-striped" style="width:100%">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Carrera</th>
                        <th class="text-center">Especialidad</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    
                </thead>
            
                <tbody>
                    
                    @foreach($consulta as $c)
                        <tr>
                        <td class="text-center">{{$c->AsignaturaCarreraId}}</td>
                        <td class="text-center">{{$c->Carrera}}</td>
                        <td class="text-center">{{$c->Asignatura}}</td>
                        <td class="text-center">
                        <!--<a href="{{route('asignatura.edit', $c->AsignaturaCarreraId)}}">
                            <button type="button" id="actualizar" class="btn btn-info">Editar</button>
                        </a>-->
                        <a href="#update{{ $c->AsignaturaCarreraId }}" class="btn btn-info" data-toggle="modal"  >Editar</a>    
                            {{ Form::open(array('route' => array('asignatura.destroy', $c->AsignaturaCarreraId), 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                            {{ Form::close() }}
        
                        </td>
                    
                        </tr>
                    
                    @include('asignaturacarrera.edit')
                    
                    @endforeach
            
            
                </tbody>
            </table>
            @include('asignaturacarrera.create')
    </div>
    
</div>

<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection