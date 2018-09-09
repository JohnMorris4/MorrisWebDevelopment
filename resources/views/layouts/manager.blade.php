<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MorrisWebDev - Management Console</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

     @include('_includes.nav.main_nav')
     @include('_includes.nav.aside_nav')

    <div id="app">
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
