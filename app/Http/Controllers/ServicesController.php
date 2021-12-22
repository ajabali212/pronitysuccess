<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('frontend.services1');
    }

    public function services2()
    {
        return view('frontend.services2');
    }

    public function services3()
    {
        return view('frontend.services3');
    }

    public function services4()
    {
        return view('frontend.services4');
    }

    
}
