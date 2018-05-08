@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
		<div id="crud-usuario" class="row">
			<div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-lg-3 col-xs-6 col-lg-offset-3">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3> {{ $usuarios1->count() }} </h3>
                                <p>Usuarios</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-primary pull-right btn-lg" data-toggle="modal" data-target="#create" >Nuevo usuario</a>
                    </div>
                </div>
				<div class="box box-solid box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Lista de usuarios</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Correo electrónico</th>
                                    <th colspan="2">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td width="10px"> {{ $usuario->id }} </td>
                                        <td> {{ $usuario->name }} </td>
                                        <td> {{ $usuario->email }} </td>
                                        <td>
                                            <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-warning btn-sm" data-toggle="modal">Editar</a>
                                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $usuarios->render() !!}
                        @include("usuarios.create")
                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection