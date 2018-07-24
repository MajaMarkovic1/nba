@extends('layouts.master')
@section('content')

<form action='/register' method='POST'>

<!-- @foreach($errors->all() as $error)
            <li class='btn btn-danger'>{{ $error }}</li>
        @endforeach -->
    {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
    @include('partials.errors', ['fieldName' => 'name'])
    
  </div>
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
  <div class="form-group">
    <label for="password_confirm">Password Confirmation</label>
    <input name="password_confirm" type="password_confirm" class="form-control" id="password_confirm" placeholder="Password">
    @include('partials.errors', ['fieldName' => 'password_confirm'])
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection