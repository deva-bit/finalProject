<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeControl extends Controller
{
    public function index()
    {
        return view("home");
    }
}
