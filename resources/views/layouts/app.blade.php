<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Działacz'}}</title>
    <link rel="icon" href="{!! asset('img/icon.ico') !!}"/>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="font-size:25px; color: black;" >
                    {{'Działacz'}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                        @else
                    <ul class="navbar-nav mr-auto">
                        
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('clubs') }}" style="font-size:25px; color: black;">{{ __('Mój klub') }}</a>
                            </li>
        @if (auth()->check())
   @if (auth()->user()->isAdmin())
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('worker') }}" style="font-size:25px; color: black;">{{ __('Pracownicy') }}</a>
                            </li>
@else

   @endif
@endif
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('kadra') }}" style="font-size:25px ;color: black;">{{ __('Kadra') }}</a>
                            </li>

                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('tabela') }}" style="font-size:25px ;color: black;">{{ __('Tabela') }}</a>
                            </li>    

                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('terminarz') }}" style="font-size:25px; color: black;">{{ __('Terminarz') }}</a>
                            </li> 

        @if (auth()->check())
   @if (auth()->user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('raportselect') }}" style="font-size:25px;color: black;">{{ __('Raport') }}</a>
                            </li>   
@else

   @endif
@endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('stats') }}" style="font-size:25px;color: black;">{{ __('Statystyki') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('results') }}" style="font-size:25px; color: black;">{{ __('Wyniki') }}</a>
                            </li>     
                        

                    </ul>
                    @endguest

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="font-size:25px">{{ __('Logowanie') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="font-size:20px">{{ __('Rejestacja') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size:20px;color: black;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profiler') }}" >{{ __('Profil') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj się') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" >
            @yield('content')
        </main>
    </div>
</body>
</html>
