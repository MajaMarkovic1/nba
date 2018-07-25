@extends('layouts.master')
@section('content')

<h1>Register</h1>
<form action='/register' method='POST'>

<!-- @foreach($errors->all() as $error)
            <li class='btn btn-danger'>{{ $error }}</li>
        @endforeach -->
    {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    @include('partials.error-message', ['fieldName' => 'name'])
    
  </div>
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
  <div class="form-group">
    <label for="password_confirm">Password Confirmation</label>
    <input name="password_confirm" type="password_confirm" class="form-control" id="password_confirm" placeholder="Password">
    @include('partials.error-message', ['fieldName' => 'password_confirm'])
  
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
  @include('partials.error-message', ['fieldName' => 'message'])
  
</form>

@endsection