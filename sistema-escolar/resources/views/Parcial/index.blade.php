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
                                <h3> {{ $parciales->count() }} </h3>
                                <p>Parciales</p>
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
                        <h3 class="box-title">Lista de parciales</h3>

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
                                    <th>Parcial</th>
                                    <th>Ciclo</th>
                                    <th>Estatus</th>
                                    <th colspan="2">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($parciales as $parcial)
                                    <tr>
                                        <td width="10px"> {{ $parcial->ParcialId }} </td>
                                        <td> {{ $parcial->Descripcion }} </td>
                                        <td> {{ $parcial->cicloDesc }} </td>
                                        <td> {{ $parcial->Estatus }} </td>
                                        <td width="180px">
                                            <a href="{{route('parcial.edit',$parcial->ParcialId)}}" class="btn btn-warning">Editar</a>
                                            {{ Form::open(array('route' => array('parcial.destroy', $parcial->ParcialId), 'class' => 'pull-right')) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @include("parcial.create")
                    </div>
                </div>
            </div>
        </div>
    </div>









<!--<div class="page-header">
    <h1>Parciales</h1>
   
</div>
<div class="container">
    <h4>total de parciales: {{$parciales->count()}}</h4>
    <a class="btn btn-success " href="#" role="button" data-toggle="modal" data-target="#create">Nuevo Parcial</a>

    <br/>
    <br/>
</div>
<div class="box box-solid box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Parciales</h3>
    </div>
    <div class="box-body">
        <table id="tabla" class="table table-hover table-striped" style="width:100%">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Parcial</th>
                        <th class="text-center">Ciclo</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    
                </thead>
            
                <tbody>
                    
                    @foreach($consulta as $parcial)
                    <tr>
                    <td class="text-center">{{$parcial->ParcialId}}</td>
                    <td class="text-center">{{$parcial->Descripcion}}</td>
                    <td class="text-center">{{$parcial->cicloDesc}}</td>
                    <td class="text-center">{{$parcial->Estatus}}</td>
                    <td class="text-center">
                    <!--<a href="{{route('parcial.edit', $parcial->ParcialId)}}">
                        <button type="button" id="actualizar" class="btn btn-info">Editar</button>
                    </a>-->
                    <a href="#update{{ $parcial->ParcialId }}" class="btn btn-info" data-toggle="modal"  >Editar</a>    
                        {{ Form::open(array('route' => array('parcial.destroy', $parcial->ParcialId), 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}
    
                    </td>
                 
                    </tr>
                   
                    @include('parcial.edit')
                   
                    @endforeach
            
            
                </tbody>
            </table>
            @include('parcial.create')
    </div>
    
</div>-->

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>
@endsection