@extends('adminlte::layouts.app')
@section('main-content')
    {!! Form::open(['route'=>'periodoacademico.store', 'method'=>'POST'])!!}
        @include('periodoAcademico.partial.campos')
        <button type="submit" class="btn btn-success btn-block">guardar</button>
    {!! Form::close() !!}
@endsection