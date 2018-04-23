@extends('adminlte::layouts.app')

@section('main-content')

<a class="btn btn-success pull-right" href="{{ route('periodoacademico.create') }}" role="button">Nuevo Periodo</a>

<h1>Periodos Academicos</h1>
<table>
    <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Descripcion</th>
            <th class="text-center">Estatus</th>
            <th class="text-center">Acciones</th>
        </tr>
      
    </thead>

    <tbody>
      


    </tbody>
</table>

@endsection