<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
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

        }    

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login'); 
    }
}
