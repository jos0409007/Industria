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
                                <h3> {{ $ciclos->count() }} </h3>
                                <p>Ciclos lectivos</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-pencil-square-o"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-primary pull-right btn-lg" data-toggle="modal" data-target="#create" >Nuevo</a>
                    </div>
                </div>
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lista de ciclos lectivos</h3>

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
                                    <th>Ciclo</th>
                                    <th>Periodo</th>
                                    <th>Estatus</th>
                                    <th colspan="2">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ciclos as $ciclo)
                                    <tr>
                                        <td width="10px"> {{ $ciclo->CicloId }} </td>
                                        <td> {{ $ciclo->Descripcion }} </td>
                                        <td> {{ $ciclo->perDescripcion }} </td>
                                        <td> {{ $ciclo->Estatus }} </td>
                                        <td width="180px">
                                            <a href="{{route('ciclolectivo.edit',$ciclo->CicloId)}}" class="btn btn-warning">Editar</a>
                                            {{ Form::open(array('route' => array('ciclolectivo.destroy', $ciclo->CicloId), 'class' => 'pull-right')) }}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Eliminar', array('class' => 'btn btn-danger')) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @include("ciclolectivo.create")
                    </div>
                </div>
            </div>
        </div>
    </div>












<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>
@endsection