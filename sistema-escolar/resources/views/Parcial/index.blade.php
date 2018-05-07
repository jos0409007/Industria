@extends('adminlte::layouts.app')

@section('main-content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">


<div class="page-header">
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
    
</div>

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>
@endsection