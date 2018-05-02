@extends('adminlte::layouts.app')

@section('main-content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<div class="card-panel">
    <div class="row">
        {!! Form::open(['url' => 'foo/bar', 'class' => 'col s12']) !!}
            <div class="input-field col s12">
                {!! Form::label('nombre', 'Nombre', ['for' => 'nombre'] ) !!}
                {!! Form::text('nombre', null , ['class' => 'form-control', 'id' => 'nombre', ]  ) !!}
            </div>
        {!! Form::close() !!}
    </div>
    
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

@endsection