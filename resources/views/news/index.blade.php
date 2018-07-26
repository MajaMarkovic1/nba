@extends('layouts.master')
@section('content')

    <ul>
        @if( auth()->check() )
       
            @foreach($news as $new)
                <li><h2><a href="/news/{{ $new->id }}">{{ $new->title }}</a></h2></li>
                <li class="list-unstyled"><em>created by</em> {{ $new->user->name }}</li>
            @endforeach
        @else
            <h2>Welcome on NBA site.<br>If you want to know all details please register.</h2>
        @endif
    </ul>

    <nav class='blog-pagination'>
        <a class="btn btn-outline-
        {{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
         href='{{ $news->previousPageUrl() }}'>Previous</a>
        <a class="btn btn-outline-
        {{ $news->hasMorePages() ? 'primary' : 'secondary disabled' }}"
         href='{{ $news->nextPageUrl() }}'>Next</a>
         Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
       
    </nav>

@endsection