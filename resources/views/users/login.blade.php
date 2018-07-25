@extends('layouts.master')
@section('content')

<form action='/login' method='POST'>

    {{ csrf_field() }}

  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    @include('partials.errors', ['fieldName' => 'email'])
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    @include('partials.errors', ['fieldName' => 'password'])
    
  </div>

  <button type="submit" class="btn btn-dark">Submit</button>
</form>

@endsection