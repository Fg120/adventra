<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $TotalUser = User::all()->count();
        $TotalCategory = Category::all()->count();
        $TotalProduct = Product::all()->count();
        if (auth()->user()->role == 'admin') {
            return view('admin.dashboard');
        } else {
            return redirect('/');
        }
    }
}
