<?php

namespace App\Http\Controllers;


use App\Models\Platewaste;

class TestingController extends Controller
{
    public function showTable()
    {
        $platewastes = Platewaste::paginate(20);
        return view('testing.table',compact('platewastes'));   
    }
}
