@extends('layouts.master')
@section('content')

    <ul class="teams">
        @foreach($teams as $team)
            <li><h2><a href="/teams/{{ $team->id }}">{{ $team->name }}</a></h2></li>
        @endforeach
    </ul>

@endsection
