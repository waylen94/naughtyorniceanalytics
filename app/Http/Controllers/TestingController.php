<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function showTable()
    {
        return view('testing.table');   
    }
}
