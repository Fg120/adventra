<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //create user
        $attributes = Request()->validate([
        'name' => 'required',
        'email'=>'required|email|unique:users,email',
        'password'=>'required|min:8',
        ]);
        

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        // session()->flash('success', 'Yout account has been created!');

        return redirect('/')->with('success', 'Yout account has been created!');;
    }
}
