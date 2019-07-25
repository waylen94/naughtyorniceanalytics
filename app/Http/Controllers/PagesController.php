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
    public function account()
    {
        return view('pages.Account');
    }
    public function analytics()
    {
        return view('pages.Analytics');
    }
    public function contact()
    {
        return view('pages.Contact');
    }
    public function news()
    {
        return view('pages.News&Tips');
    }
    public function benchmark()
    {
        return view('pages.Benchmark');
    }
}