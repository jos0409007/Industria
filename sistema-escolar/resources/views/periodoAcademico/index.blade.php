@extends('adminlte::layouts.app')

@section('main-content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">



<div class="page-header">
    <h1>Periodos Academicos</h1>
    
</div>
<div class="row">
    <div class="container">
            <h4>total de periodos: {{$periodos->count()}}</h4>
            <!-- <a class="btn btn-success " href="{{ route('periodoacademico.create') }}" role="button">Nuevo Periodo</a>-->
            <a href="#" class="btn btn-primary pull-left btn-lg" data-toggle="modal" data-target="#create" >Nuevo Periodo</a>
            <br/>
            <br/>
    </div>

    
</div>


<div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Periodos</h3>
        </div>
        <div class="box-body">
            <table id="tabla" class="table table-hover table-striped" >
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Descripcion</th>
                        <th class="text-center">Estatus</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                        
                </thead>
                
                <tbody>
                        
                    @foreach($periodos as $periodo)
                    <tr>
                    <td class="text-center">{{$periodo->PeriodoId}}</td>
                    <td class="text-center">{{$periodo->Descripcion}}</td>
                    <td class="text-center">{{$periodo->Estatus}}</td>
                    <td class="text-center">
                        <a href="{{route('periodoacademico.edit',$periodo->PeriodoId)}}">
                            <button type="button" id="actualizar" class="btn btn-info">Editar</button>
                        </a>

                        {{ Form::open(array('route' => array('periodoacademico.destroy', $periodo->PeriodoId), 'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                        {{ Form::close() }}

                    </td>
                
                    </tr>
                    @endforeach
            
            
                </tbody>
            </table>
            @include("periodoacademico.create")
            @include("periodoacademico.edit")
        </div>

</div>>

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>
@endsection