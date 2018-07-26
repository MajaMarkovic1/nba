<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyMail;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

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
            'password_confirm' => 'required_with:password|same:password'
            ]); 

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
            
        ]);
        Mail::to($user->email)->send(new VerifyMail($user));

        //auth()->login($user);


        return redirect('/login');
    }

    public function verify($id)
    {
        $user = User::find($id);
        
        if ( $user->is_verified === 0 ){
            $user->is_verified = 1;
            $user->save();
        }
        return redirect('/');
    }

   
}
