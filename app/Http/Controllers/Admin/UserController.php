<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function index()
    {
        return view('admin.tenants');
    }

    public function show()
    {
        return view('admin.register-child');
    }
}
