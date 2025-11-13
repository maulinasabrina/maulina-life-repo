<?php

namespace App\Http\Controllers;
use App\Models\Journal;


use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public_user.index');
    }

    public function home()
    {
        $recentJournal = Journal::latest()->first();
        return view('public_user.home',compact('recentJournal'));

    }

    public function journal()
    {
        $journals = Journal::all();
        return view('public_user.journal',compact('journals'));
    }

    public function journalDetail($slug)
    {
        $journals = Journal::where('slug', $slug)->firstOrFail();


        return view('public_user.journal-detail',compact('journals'));
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
