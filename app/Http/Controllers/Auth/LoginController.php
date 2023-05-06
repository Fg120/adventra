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
        $emails = request()->email;
        $passwords = request()->password;
        if ($emails == '' || $passwords == '') {
            alert::warning('Email Dan Password harus di isi!');
            return back();
        }

        $attributes = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            alert::error('Email atau Password salah!');
            return back();

            // throw ValidationException::withMessages([
            //     'email' => 'Your provided credentials could not be verified.'
            // ]);
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
