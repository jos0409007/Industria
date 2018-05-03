<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>-->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Opciones</li>
            <!-- Optionally, you can add icons to the links -->
            @role('admin')
                <li class="active"><a href="{{ url('/usuario') }}"><i class='fa fa-user'></i> <span>Usuarios</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-users'></i> <span>Roles</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='glyphicon glyphicon-eye-open'></i> <span>Permisos</span></a></li>
            @endrole
            @role('administracion')
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Docentes</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Alumnos</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Clases</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Secciones</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Ciclo lectivo</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Periodo académico</span></a></li>
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Especialidades</span></a></li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-link'></i> <span>Espacio físico</span> <i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Aulas</span></a></li>
                        <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Edificios</span></a></li>
                    </ul>
                </li>
            @endrole
            @role('docente')
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Trabajos</span></a></li>
            @endrole
            @role('padre')
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Alumno</span></a></li>
            @endrole
            @role('alumno')
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-gears'></i> <span>Trabajos</span></a></li>
            @endrole
        </ul> 
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
