<?php
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



// Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('admin/journal', [AdminController::class, 'journal'])->name('journal');
    Route::get('admin/journal/{id}', [AdminController::class, 'showJournal'])->name('showJournal');
    Route::get('admin/journal-entry', [AdminController::class, 'journalEntry'])->name('addJournal');
    Route::post('admin/journal-store', [AdminController::class, 'journalStore'])->name('storeJournal');
    Route::delete('admin/journal-delete/{id}', [AdminController::class, 'journalDestroy'])->name('journalDestroy');
    


    Route::get('/breeze', function() {
        return view('breeze.dashboard');   
    }) ->name('breeze');



    //PROFILE MANAGEMENT
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {
    Route::get('/', [PublicController::class, 'index'])
        ->name('landing');
    Route::get('home', [PublicController::class, 'home'])
        ->name('home');
    Route::get('journal', [PublicController::class, 'journal'])
        ->name('journal');
    Route::get('journal-detail/{slug}', [PublicController::class, 'journalDetail'])
        ->name('journalDetail');
    Route::get('project', [PublicController::class, 'project'])
        ->name('project');
    Route::get('about', [PublicController::class, 'about'])
        ->name('about');
    Route::get('reading', [PublicController::class, 'reading'])
        ->name('reading');
 
});

require __DIR__.'/auth.php';
