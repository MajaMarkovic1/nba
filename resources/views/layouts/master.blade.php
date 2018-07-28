<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/nba.css">
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;" >
        <div>
            <a href="/">Home</a>
            @if(auth()->check())
                <a href="/news">News</a>
                <a href="">{{ auth()->user()->name }}</a>
                <a href="/logout">Log out</a>
            @else
                <a href="/register">Register</a>
                <a href="/login">Log in</a>
            @endif
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                @yield('content')
            </div>
            
            @if(auth()->check())
                <div class="col-sm-3 offset-sm-1 blog-sidebar">
                    <div class="sidebar-module">
                        <h4>Teams</h4>
                        <ol class="list-unstyled">
                            @foreach ($teams as $team)
                            <li>
                                <a href='/news/team/{{ $team->name }}'>{{ $team->name }}</a>
                            </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            @endif
            
        </div>
    </div>
</body>
</html>