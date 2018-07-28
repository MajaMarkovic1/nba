@extends('layouts.master')
@section('content')

    <h1>{{ $team->name }}</h1>
    <p><em>Email</em>: {{ $team->email }}</p>
    <p><em>Address</em>: {{ $team->address }}</p>
    <p><em>City</em>: {{ $team->city }}</p>
    <a class="btn btn-dark" href="/news/team/{{ $team->name }}">News</a>
    
    <h4>Players</h4>
    <ul class="players">
        @foreach($team->players as $player)
            <li>
                <a href="/players/{{ $player->id }}"><strong>{{ $player->first_name }} {{ $player->last_name }}</strong></a>
            </li>
        @endforeach
    </ul><br>

    <h4>Comments:</h4>
    <form action='/teams/{{ $team->id }}/comments' method='POST'>

        {{ csrf_field() }}

        <div class="form-group">
            <textarea style="width: 30%;" name="content" class="form-control" id="content" placeholder="Comment"></textarea>
            @include('partials.error-message', ['fieldName' => 'content'])
            
        </div>

        <button type="submit" class="btn btn-dark">Submit</button>
        @include('partials.error-message', ['fieldName' => 'message'])
    
    </form>
    <br>
    <ul>
        @foreach($team->comments as $comment)
            <li><strong>{{ $comment->user->name }}</strong></li>
            <li class="list-unstyled">{{ $comment->content }}</li>
        @endforeach
    </ul>

@endsection
