<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'admin') {
            return view('admin.dashboard');
        } else {
            return redirect('/');
        }
    }
}
