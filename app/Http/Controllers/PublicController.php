<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public_user.index');
    }

    public function home()
    {
        return view('public_user.home');
    }

    public function journal()
    {
        return view('public_user.journal');
    }

    public function project()
    {
        return view('public_user.project');
    }

    public function about()
    {
        return view('public_user.about');
    }
    
    public function reading()
    {
        return view('public_user.reading');
    }
}
