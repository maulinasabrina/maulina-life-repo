<?php


namespace App\Http\Controllers\Public;
use App\Http\Controllers\Controller; 
use App\Models\Journal;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function showLanding()
    {
        return view('public_user.index');
    }

    public function showMaintain()
    {
        return view('public_user.maintain');
    }

    public function showHome()
    {
        $recentJournal = Journal::latest()->first();
        
        return view('public_user.home',compact('recentJournal'));

    }

    public function showJournal()
    {
        $journals = Journal::all();
        return view('public_user.journal',compact('journals'));
    }

    public function showDetailJournal($slug)
    {
        $journals = Journal::where('slug', $slug)->firstOrFail();


        return view('public_user.journal-detail',compact('journals'));
    }

    public function showProject()
    {
        return view('public_user.project');
    }

    public function showAbout()
    {
        return view('public_user.about');
    }
    
    public function showReading()
    {
        return view('public_user.reading');
    }
}
