@extends('layouts.master')
@section('content')
  
<h1>Create news</h1>
<form style="width: 80%;" action='/news' method='POST'>

        {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Title">
        @include('partials.error-message', ['fieldName' => 'title'])
        
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
        @include('partials.error-message', ['fieldName' => 'content'])
        
    </div>

    @if(count($teams))
        <label for='teams[]'>Teams</label><br>
        @foreach($teams as $team)
        <div class='checkbox'>
            <label for="team">{{ $team->name }}</label>
            <input name="teams[]" type="checkbox" id="team" value='{{ $team->id }}'>
        </div>  
        @endforeach
    @endif

  <button type="submit" class="btn btn-primary">Submit</button>
  @include('partials.error-message', ['fieldName' => 'message'])
  
</form>

@endsection