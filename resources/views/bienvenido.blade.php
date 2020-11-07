<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Citas Médicas') }}</title>
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="/">Citas M&eacute;dicas</a>
                <a  class="btn btn-primary" href="/login"> Iniciar Sesi&oacute;n</a>
            </div>
        </nav>
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Sistema de Gesti&oacute;n de Citas M&eacute;dicas e Historial Cl&iacute;nico</h1>
                    </div>
                    <!--<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form>
                        <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                        </div>
                        <div class="col-12 col-md-3">
                            <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                        </div>
                        </div>
                    </form>
                    </div>-->
                </div>
            </div>
        </header> --}}
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
