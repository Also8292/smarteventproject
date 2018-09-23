<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap-3.3.6.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/home_style.css') }}" rel="stylesheet">

</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Listing </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="" role="presentation"><a href="/listing">All Events</a></li>
                    <li role="presentation"><a href="/createEvent">Add Event</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="">Aliou <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="/profile">Profile</a></li>
                            <li role="presentation"><a href="#">Second Item</a></li>
                            <li role="presentation"><a href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-3.3.6.min.js') }}"></script>

</body>
</html>
