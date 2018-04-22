<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @role('admin')
            @yield('contentheader_title', 'Página principal - Administrador')
            <small>@yield('contentheader_description', 'Administración general del sistema')</small>
        @endrole
        @role('administracion')
            @yield('contentheader_title', 'Página principal - Administración institucional')
            <small>@yield('contentheader_description', 'Administración institucional')</small>
        @endrole
        @role('docente')
            @yield('contentheader_title', 'Página principal - Docente')
            <small>@yield('contentheader_description', 'Página principal del docente')</small>
        @endrole
        @role('padre')
            @yield('contentheader_title', 'Página principal - Padre')
            <small>@yield('contentheader_description', 'Página principal del padre o tutor')</small>
        @endrole
        @role('alumno')
            @yield('contentheader_title', 'Página principal - Alumno')
            <small>@yield('contentheader_description', 'Página principal del alumno')</small>
        @endrole

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>