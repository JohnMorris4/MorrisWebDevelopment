<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MorrisWebDev</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <nav class="navbar has-shadow">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{route('home')}}">
                            <img src="{{asset('images/morris.png')}}" alt="Morris Web Development">
                        </a>
                        <a href="/create" class="navbar-item is-tab is-hidden-mobile m-l-10">Create</a>
                        <a href="/share" class="navbar-item is-tab is-hidden-mobile">Share</a>
                        <a href="/post" class="navbar-item is-tab is-hidden-mobile">Blog</a>
                        <a href="/about" class="navbar-item is-tab is-hidden-mobile">About</a>
                        <a href="/contact" class="navbar-item is-tab is-hidden-mobile">Contact</a>
                    </div>
                    <div class="navbar-end nav-menu">
                        @if(!Auth::guest())
                            <a href="" class="navbar-item is-tab">Login</a>
                            <a href="" class="navbar-item is-tab">Register</a>
                        @else
                            <button class="has-dropdown navbar-item is-tab">
                                Good Day John <span class="icon"><i class="fa fa-caret-down"></i></span>

                                <ul class="dropdown-menu">
                                    <li><a href="">Profile</a></li>
                                    <li><a href="">Notifications</a></li>
                                    <li><a href="">Settings</a></li>
                                    <li class="seperator"></li>
                                    <li><a href="">Logout</a></li>
                                </ul>
                            </button>
                        @endif
                    </div>
                </div>
            </nav>
            @yield('content')
        </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
