<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Personal movies sheduler</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
        <nav class="navbar navbar-default">
            @if (Route::has('login'))

                <ul class="nav navbar-nav">
                        <li><a href="{{ url('/search') }}">Search</a></li>
                    @if (Auth::check())
                         <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                         <li><a href="{{ url('/login') }}">Login</a></li>
                         <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                </ul>
            @endif
        </nav>
        </div>
        </div>
            <div class="container">
            <div class="row">
            @yield('content')
            </div>
            </div>
        </div>
    </body>
</html>
