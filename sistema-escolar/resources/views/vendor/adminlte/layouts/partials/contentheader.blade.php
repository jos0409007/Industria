<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @role('admin')
            @yield('contentheader_title', 'Página principal - Administrador')
            <small>@yield('contentheader_description')</small>
        @else
            @yield('contentheader_title', 'Página principal')
            <small>@yield('contentheader_description')</small>
        @endrole

    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>