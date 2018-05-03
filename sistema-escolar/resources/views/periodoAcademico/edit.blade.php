@extends('adminlte::layouts.app')
@section('main-content')
<h4 class="text-cecnter">{{$periodoAcademico->Descripcion}}</h4>

    {!! Form::model($periodoAcademico, ['route'=>'periodoacademico.store', 'method'=>'PUT'])!!}
    @include('periodoAcademico.partial.campos')
    <button type="submit" class="btn btn-success btn-block">guardar</button>
    {!! Form::close() !!}


@endsection