<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $totalUsers = User::count();
        $recentUsers = User::latest()->take(5)->get();
        
        return view('admin.dashboard', compact('totalUsers', 'recentUsers'));
    }
}
