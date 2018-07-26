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
    <nav class="navbar navbar-dark bg-dark" >
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
        @yield('content')
    </div>
</body>
</html>