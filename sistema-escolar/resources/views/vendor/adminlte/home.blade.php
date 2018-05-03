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
					<div class="col-md-3 col-md-offset-1">
						<div class="info-box bg-green">
							<span class="info-box-icon"><i class="fa fa-users"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Usuarios</span>
								<span class="info-box-number"> {{ $usuarios->count() }} </span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-offset-1">
						<div class="info-box bg-blue">
							<span class="info-box-icon"><i class="fa fa-users"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Roles</span>
								<span class="info-box-number"> {{ $roles->count() }} </span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-md-offset-1">
						<div class="info-box bg-yellow">
							<span class="info-box-icon"><i class="fa fa-users"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Permisos</span>
								<span class="info-box-number"> {{ $permisos->count() }} </span>
							</div>
						</div>
					</div>
				@endrole()
				</div>

			</div>
		</div>
	</div>
@endsection
