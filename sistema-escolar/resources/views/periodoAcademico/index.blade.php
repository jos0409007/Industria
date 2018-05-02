@extends('adminlte::layouts.app')

@section('main-content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

<a class="btn btn-success pull-left" href="{{ route('periodoacademico.create') }}" role="button">Nuevo Periodo</a>
{{$periodos->count()}}
<h1>Periodos Academicos</h1>

<table id="tabla" class="table table-striped table-bordered" style="width:100%">
    <thead>
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
        {!! Form::open(['route'=>['periodoacademico.destroy',$periodo->PeriodoId], 'method' => 'DELETE']) !!}

        <td class="text-center">
            <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </button>
            <button type="submit">Actualizar</button>
        </td>

        {!! Form::close() !!}
        </tr>
        @endforeach


    </tbody>
</table>

<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
    $('tabla').DataTable();
} );
</script>
@endsection