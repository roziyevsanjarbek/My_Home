<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index(){
        return view('admin.house');
    }

    public function show()
    {
        return view('admin.add-house');
    }
}
