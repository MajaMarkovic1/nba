
You have a new comment on your <a href="{{ url('/teams/'.$team->id) }}">{{ $team->name }}</a> post.

Comment content: 

<p> 
    {{ $team->comments->last() }}
</p>