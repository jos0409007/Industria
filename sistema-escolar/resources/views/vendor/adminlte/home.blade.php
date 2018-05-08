@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
				@role('admin')	
					<div class="col-lg-3 col-xs-6 ">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3> {{ $usuarios->count() }} </h3>
								<p>Usuarios</p>
							</div>
							<div class="icon">
								<i class="fa fa-user"></i>
							</div>
							<a href="/usuario" class="small-box-footer">
								Administrar
								<i class="glyphicon glyphicon-cog"></i>
							</a>
						</div>
						<div class="col-sm-10 col-md-offset-1">
							<a href="#" class="btn btn-primary pull-right btn-lg" data-toggle="modal" data-target="#create-user" >Nuevo usuario</a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6 col-lg-offset-1">
						<div class="small-box bg-green">
							<div class="inner">
								<h3> {{ $roles->count() }} </h3>
								<p>Roles</p>
							</div>
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<a href="/rol" class="small-box-footer">
								Administrar
								<i class="glyphicon glyphicon-cog"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-xs-6 col-lg-offset-1">
						<div class="small-box bg-blue">
							<div class="inner">
								<h3> {{ $permisos->count() }} </h3>
								<p>Permisos</p>
							</div>
							<div class="icon">
								<i class="glyphicon glyphicon-eye-open"></i>
							</div>
							<a href="/permiso" class="small-box-footer">
								Administrar
								<i class="glyphicon glyphicon-cog"></i>
							</a>
						</div>
					</div>
					@include("usuarios.create")
				@endrole()
				</div>

			</div>
		</div>
	</div>
@endsection
