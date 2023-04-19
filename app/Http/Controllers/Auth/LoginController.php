<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;
class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        if (auth()->user()->role == 'admin') {
            return redirect('/admin/dashboard')->with('success', 'Welcome Back!');
        }
        return redirect('/');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        alert::success('Goodbye!');
        return redirect('/');
    }
}
