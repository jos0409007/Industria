@extends('adminlte::layouts.app')
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <div class="container-fluid spark-screen">
        <div id="crud-usuario" class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-lg-3 col-xs-6 col-lg-offset-3">
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3> {{ $asignaturaCarrera->count() }} </h3>
                                <p>Asignaturas por carrera</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-book"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-primary pull-right btn-lg" data-toggle="modal" data-target="#create" >Nuevo</a>
                    </div>
                </div>
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de asignaturas por carrera</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Carrera</th>
                                    <th>Especialidad</th>
                                    <th colspan="2">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($asignaturaCarrera as $asg)
                                    <tr>
                                        <td width="10px"> {{ $asg->AsignaturaCarreraId }} </td>
                                        <td> {{ $asg->Carrera }} </td>
                                        <td> {{ $asg->Asignatura }} </td>
                                        <td width="180px">
                                            <a href="{{route('asignatura.edit',$asg->AsignaturaCarreraId)}}" class="btn btn-warning">Editar</a>
                                            {{ Form::open(array('route' => array('asignatura.destroy', $asg->AsignaturaCarreraId), 'class' => 'pull-right')) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @include("asignaturacarrera.create")
                    </div>
                </div>
            </div>
        </div>
    </div>









<!--<div class="page-header">
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
    
</div>-->

<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
@endsection