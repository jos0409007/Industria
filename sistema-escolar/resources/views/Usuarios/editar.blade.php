@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="box box-solid box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar usuario: {{ $usuario->name }}</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        {{ Form::model($usuario, array('route' => array('usuario.update', $usuario->id), 'method' => 'PUT')) }}
                            @include('usuarios.partial.campos')
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    @foreach ($roles as $rol)
                                        <li>
                                            <label>
                                                {{ Form::checkbox('roles[]', $rol->id, null) }}
                                                {{ $rol->name }}
                                                <em>({{ $rol->description ?: "Sin descripción" }})</em>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}
                        {{ Form::close() }}

                    </div>

                </div>

            </row>
            
        </div>
        
    </div>
@endsection



