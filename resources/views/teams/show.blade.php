@extends('layouts.master')
@section('content')

    <h1>{{ $team->name }}</h1>
    <p><em>Email</em>: {{ $team->email }}</p>
    <p><em>Address</em>: {{ $team->address }}</p>
    <p><em>City</em>: {{ $team->city }}</p>
    <h4>Players</h4>
    <ul class="players">
        @foreach($team->players as $player)
            <li>
                <a href="/players/{{ $player->id }}"><strong>{{ $player->first_name }} {{ $player->last_name }}</strong></a>
            </li>
        @endforeach
    </ul>

@endsection
