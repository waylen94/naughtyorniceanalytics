<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show()
    {
        return view('pages.welcome');
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }
}