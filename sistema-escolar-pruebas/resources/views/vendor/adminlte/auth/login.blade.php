@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Iniciar sesión
@endsection

@section('content')
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}">Sistema Escolar</a>
            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        <p class="login-box-msg"> Inicia sesión con tu cuenta </p>

        <login-form name="{{ config('auth.providers.users.field','email') }}"
                    domain="{{ config('auth.defaults.domain','') }}"></login-form>
    </div>

    </div>
    </div>
    @include('adminlte::layouts.partials.scripts_auth')
</body>

@endsection