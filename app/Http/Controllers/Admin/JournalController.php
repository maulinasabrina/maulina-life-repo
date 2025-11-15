<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller; 
use App\Models\Journal;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class JournalController extends Controller
{
    
    public function getAll(){
        $journals = Journal::all();
        $totalJournals = Journal::count(); 
        $latestJournal = Journal::latest()->first();

        return view('admin.journal',compact('journals', 'totalJournals', 'latestJournal'));
    }

     public function getById ($id){
       $journals = Journal::findOrFail($id);

        return view('admin.journal-detail', compact('journals'));
       
    }

    public function createNew (){
        $title = 'Create New Journal';
        $button = 'Save';


        return view('admin.journal-entry', compact('title','button'));
    }


     public function add (Request $request)
    {
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

        return redirect()->route('admin.journal')
                        ->with('success', 'New journal entry added successfully ☕');
    }

    public function updatebyId ($id){
        $title = 'Edit Journal';
        $journals = Journal::findOrFail($id);
        $button = 'Update';
        
        return view('admin.journal-entry', compact('title','journals','button'));
    }

    public function modify(Request $request, $id) {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'nullable|date',
            'category' => 'nullable|string|max:100',
            'excerpt' => 'nullable|string',
            'content' => 'nullable|string',
            // 'image_url' => 'nullable|string',
        ]);

        $journal = Journal::findOrFail($id);
        $journal->update([
                'title' => $validated['title'],
                'date' => $validated['date'],
                'category' => $validated['category'],
                'excerpt' => $validated['excerpt'],
                'content' => $validated['content'],
            ]);

        return redirect()->route('admin.journal')->with('success', 'Post updated!');
    }

    // public function updatebyId ($id) {
    //     $posts = Posts::findOrFail($id);
    //     $title = 'Edit Journal';
    //     $button = 'Update';
        
    //     $tags  = json_decode($posts['tags'],true);
    //     // dd($tags);

    //     $tagsString = implode(', ', $tags);

    //     return view('mini-project-3.form', compact('posts','tagsString','title','button'));
    // }

    

    //     $tagsArray = array_map('trim', explode(',', $validated['tags']));

    //    
    // }

     public function delete ($id) {
        Journal::destroy($id);
        return redirect()->route('admin.journal')->with('success', 'Post deleted!');
    }

}
