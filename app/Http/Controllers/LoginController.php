<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('users.login');
    }

    public function store()
    {
        $credentials = request()->only(['email', 'password']);

        if(!auth()->attempt($credentials)){
            return redirect()->back()->withErrors([
                'message' => 'Bad credentials. Please try again!'
            ]);

        } else  if( auth()->user()->is_verified === 0 ){
            auth()->logout();
            return 'check your email';
        }

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login'); 
    }

}
