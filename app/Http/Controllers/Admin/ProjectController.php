<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use App\Models\Journal;
use App\Models\Project;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
     public function dashboardAdmin(){
        $journals = Journal::latest()->take(3)->get();
        $totalJournals = Journal::count(); 
        $latestJournal = Journal::latest()->first();

        $projects = Project::latest()->take(3)->get();
        $totalProjects = Project::count(); 
        $latestProject = Project::latest()->first();

        return view('admin.dashboard', compact('journals', 'totalJournals', 'latestJournal', 'projects', 'totalProjects', 'latestProject'));
       
    }

    public function journalPageAdmin(){
        $journals = Journal::latest()->take(3)->get();
        $totalJournals = Journal::count(); 
        $latestJournal = Journal::latest()->first();

        return view('admin.journal',compact('journals', 'totalJournals', 'latestJournal'));
    }

     public function showJournalDetailAdmin ($id){
       $journals = Journal::findOrFail($id);

        return view('admin.journal-detail', compact('journals'));
       
    }

    public function journalAddPage(){
     

         return view('admin.journal-entry');
    }



     public function StoreJournal(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'nullable|date',
            'category' => 'nullable|string|max:100',
            'excerpt' => 'nullable|string',
            'content' => 'nullable|string',
            // 'image_url' => 'nullable|string',
        ]);
        // dd($validated);
        
        // generate slug otomatis jika tidak diisi
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // default category jika tidak diisi
        if (empty($validated['category'])) {
            $validated['category'] = 'Journal';
        }

        Journal::create($validated);

        return redirect()->route('journal')
                        ->with('success', 'New journal entry added successfully ☕');
        }

    // public function edit($id) {
    //     $posts = Posts::findOrFail($id);
    //     $title = 'Edit Journal';
    //     $button = 'Update';
        
    //     $tags  = json_decode($posts['tags'],true);
    //     // dd($tags);

    //     $tagsString = implode(', ', $tags);

    //     return view('mini-project-3.form', compact('posts','tagsString','title','button'));
    // }

    // public function update(Request $request, $id) {
    //     $validated = $request->validate([
    //             'title' => 'required',
    //             'excerpt' => 'required',
    //             'content' => 'required',
    //             'tags' => 'required',
    //     ]);

    //     $tagsArray = array_map('trim', explode(',', $validated['tags']));

    //     $post = Posts::findOrFail($id);
    //     $post->update([
    //             'title' => $validated['title'],
    //             'excerpt' => $validated['excerpt'],
    //             'content' => $validated['content'],
    //             'tags' => json_encode($tagsArray),
    //         ]);
    //     return redirect('/posts')->with('success', 'Post updated!');
    // }

     public function journalDestroy($id) {
        Journal::destroy($id);
        return redirect('/journal')->with('success', 'Post deleted!');
    }

}
