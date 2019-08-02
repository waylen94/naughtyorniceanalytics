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
//         $hotel = $user->Hotel()->getRelated();
//         $platewastes = $hotel->pageinate(5);
        
        
        return view('pages.dashboard',compact('user'));
    }
    public function account(User $user)
    {
        return view('pages.Account', compact('user'));
    }
    public function analytics(User $user)
    {
        return view('pages.Analytics', compact('user'));
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