<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    public function show()
    {
        return view('pages.welcome');
    }
    
    
    public function dashboard(User $user)
    {
        $platewaste = $user->Hotel->platewaste->take(10);
        return view('pages.Dashboard',compact('user','platewaste'));
    }
    public function account(User $user)
    {
        return view('pages.Account', compact('user'));
    }
    public function analytics(User $user)
    {
        $platewaste = $user->Hotel->platewaste->take(10);
        return view('pages.Analytics', compact('user','platewaste'));
    }
    public function contact(User $user)
    {
        return view('pages.Contact', compact('user'));
    }
    public function news(User $user)
    {
        return view('pages.News&Tips', compact('user'));
    }
    public function benchmark(User $user)
    {
        return view('pages.Benchmark', compact('user'));
    }
}