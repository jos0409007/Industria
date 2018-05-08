@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        {{ Form::model($usuario, array('route' => array('usuario.update', $usuario->id), 'method' => 'PUT')) }}
            @include('usuarios.partial.campos')
            {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}
    </div>
@endsection



