@extends('layouts.master')
@section('content')

<h1>Log in</h1>
<form action='/login' method='POST'>

    {{ csrf_field() }}

  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" id="email" placeholder="Email">
    @include('partials.error-message', ['fieldName' => 'email'])
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
    @include('partials.error-message', ['fieldName' => 'password'])
    
  </div>

  <button type="submit" class="btn btn-dark">Submit</button>
  @include('partials.error-message', ['fieldName' => 'message'])
  
</form>

@endsection