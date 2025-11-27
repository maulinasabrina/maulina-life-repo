<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use App\Models\Journal;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    
     public function getAll(){
     
        $journals = Journal::latest()->take(3)->get();
        $totalJournals = Journal::count(); 
        $latestJournal = Journal::latest()->first();

        // dd($journals);

        $projects = Project::latest()->take(3)->get();
        $totalProjects = Project::count(); 
        $latestProject = Project::latest()->first();

        return view('admin.dashboard', compact('journals', 'totalJournals', 'latestJournal', 'projects', 'totalProjects', 'latestProject'));
       
    }

}
