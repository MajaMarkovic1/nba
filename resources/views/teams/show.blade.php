@extends('layouts.master')
@section('content')

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

@endsection
