<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $team->name }}</h1>
    <p>{{ $team->email }}</p>
    <p>{{ $team->address }}</p>
    <p>{{ $team->city }}</p>
    <h3>Players</h3>
    <ul>
    
        @foreach($team->players as $player)
            <li>
                <a href="/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>