<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
    <p>{{ $player->email }}</p>
    <p><a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></p>
</body>
</html>