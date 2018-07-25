@extends('layouts.master')
@section('content')

    <h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
    <p><em>Email</em>: {{ $player->email }}</p>
    <p><em>Team</em>: <a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a></p>

@endsection