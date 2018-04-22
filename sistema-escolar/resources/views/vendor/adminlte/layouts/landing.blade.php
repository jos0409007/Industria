<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema escolar</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body >

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><b>Sistema escolar</a>
            </div>
            <div class="navbar-collapse collapse">
                <!--<ul class="nav navbar-nav">
                    <li class="active"><a href="#home" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                    <li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a></li>
                    <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li>
                </ul>-->
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/iniciar-sesion') }}">Inicar sesión</a></li>
                        <!--<li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>-->
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                            <img  src="{{ asset('/img/sistema-escolarLogo.png') }}" alt="">
                        <h1> Sistema Escolar</h1>
                        <h3><a href="{{ url('/iniciar-sesion') }}" class="btn btn-lg btn-success">Iniciar sesión</a></h3>
                    </div>
                    <div class="col-lg-12">
                        <h5 style="visibility:hidden;">A</h5>
                        <p style="visibility:hidden;">A</p>
    
                    </div>


                </div>
            </div> <!--/ .container -->
        </div>
    </section>

</div>
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
</body>
</html>