<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required',
            'password_confirm' => 'required_with:password|same:password|min:6'
            ]); 

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        auth()->login($user);

        return redirect('/teams');
    }
}
