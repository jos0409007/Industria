@extends('adminlte::layouts.app')

@section('main-content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">



<div class="page-header">
    <h1>Ciclos Lectivos</h1>
    
</div>
<div class="container">
    <h4>total de ciclos: {{$ciclos->count()}}</h4>
    <a class="btn btn-success " href="{{ route('ciclolectivo.create') }}" role="button">Nuevo Periodo</a>

    <br/>
    <br/>
</div>

<div class="well">
    <table id="tabla" class="table table-striped table table-hover table-bordered" style="width:100%">
            <thead class="thead-light">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Estatus</th>
                    <th class="text-center">Acciones</th>
                </tr>
                
            </thead>
        
            <tbody>
                
                @foreach($ciclos as $ciclo)
                <tr>
                <td class="text-center">{{$ciclo->CicloId}}</td>
                <td class="text-center">{{$ciclo->PeriodoId}}</td>
                <td class="text-center">{{$ciclo->Estatus}}</td>
                <td class="text-center">
                    <a href="{{route('ciclolectivo.edit',$ciclo->CicloId)}}">
                        <button type="button" id="actualizar" class="btn btn-info">Editar</button>
                    </a>

                    {{ Form::open(array('route' => array('ciclolectivo.destroy', $ciclo->CicloId), 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                    {{ Form::close() }}

                </td>
             
                </tr>
                @endforeach
        
        
            </tbody>
        </table>
            
</div>

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>
@endsection