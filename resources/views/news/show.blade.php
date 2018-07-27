@extends('layouts.master')
@section('content')

    <h1>{{ $new->title }}</h1>
    <p><em>Created at</em>: {{ $new->created_at }}</p>
    <p><em>Author</em>: {{ $new->user->name }}</p>
    <p><em>Content</em>:<br> {{ $new->content }}</p>

    @if(count($new->teams))
        <ul class='list-unstyled'>
            @foreach($new->teams as $team)
                <li class='btn btn-primary'>
                    <a style='color: white;' href='/teams/{{ $team->id }}'>{{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
    

@endsection