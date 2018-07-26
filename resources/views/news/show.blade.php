@extends('layouts.master')
@section('content')

    <h1>{{ $new->title }}</h1>
    <p><em>Created at</em>: {{ $new->created_at }}</p>
    <p><em>Author</em>: {{ $new->user->name }}</p>
    <p><em>Content</em>:<br> {{ $new->content }}</p>
    

@endsection