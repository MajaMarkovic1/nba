@extends('layouts.master')
@section('content')

    <ul class="teams">
        @if( auth()->check() )
       
            @foreach($teams as $team)
                <li><h2><a href="/teams/{{ $team->id }}">{{ $team->name }}</a></h2></li>
            @endforeach
        @else
            <h2>Welcome on NBA site.<br>If you want to know all details please register.</h2>
        @endif
    </ul>

@endsection
