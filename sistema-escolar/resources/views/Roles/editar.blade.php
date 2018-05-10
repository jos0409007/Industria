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
                        <h3 class="box-title">Editar rol: {{ $roles->name }}</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        {{ Form::model($roles, array('route' => array('rol.update', $roles->id), 'method' => 'PUT')) }}
                            @include('roles.partial.campos')
                            <div class="form-group">
                                <ul class="list-unstyled">
                                    @foreach ($permisos as $permiso)
                                        <li>
                                            <label>
                                                {{ Form::checkbox('permisos[]', $permiso->id, null) }}
                                                {{ $permiso->name }}
                                                <em>({{ $permiso->description ?: "Sin descripción" }})</em>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                                {!! $permisos->render() !!}
                            </div>
                            {{ Form::submit('Actualizar', array('class' => 'btn btn-primary')) }}
                        {{ Form::close() }}

                    </div>

                </div>

            </row>
            
        </div>
        
    </div>
@endsection



