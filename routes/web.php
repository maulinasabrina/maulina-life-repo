<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\PublicController;
// use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;



// Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::prefix('admin')->group(function (){

        Route::get('dashboard', [DashboardController::class, 'getAll'])->name('admin.dashboard');

        Route::controller(JournalController::class)->group(function () {
            Route::get('journal' , 'getAll')->name('admin.journal');
            Route::get('journal/{id}', 'getById')->name('show.journal');
            Route::get('create', 'createNew')->name('create.journal');
            Route::post('add', 'add')->name('add.journal');
            Route::delete('delete/{id}','delete')->name('delete.journal');
        });
    
    });
   


    Route::get('/breeze', function() {
        return view('breeze.dashboard');   
    }) ->name('breeze');


    //PROFILE MANAGEMENT
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {

    //PUBLIC
    Route::controller(PublicController::class)->group(function () {
        Route::get('/', 'showLanding') ->name('landing');
        Route::get('home', 'showHome')->name('home');
        Route::get('journal', 'showJournal')->name('journal');
        Route::get('journal/{slug}', 'showDetailJournal')->name('journal.detail');
        Route::get('project', 'showProject')->name('project');
        Route::get('about', 'showAbout')->name('about');
        Route::get('reading', 'showReading')->name('reading');
    });

});

require __DIR__.'/auth.php';
