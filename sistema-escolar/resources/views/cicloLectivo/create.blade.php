@extends('adminlte::layouts.app')
@section('main-content')

        {!! Form::open(['route'=>'ciclolectivo.store', 'method'=>'POST'])!!}
            @include('ciclolectivo.partial.campos')
            <button type="submit" class="btn btn-success btn-block">guardar</button>
        {!! Form::close() !!}

@endsection