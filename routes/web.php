<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/team', [TeamController::class, 'index'])->name('Team');
Route::post('/team', [TeamController::class, 'store'])->name('Team.store');
Route::delete('/team/{team}', [TeamController::class, 'destroy'])->name('Team.destroy');

// Route::delete("/task/destroy/{task}", [TaskController::class, 'destroy'])->name('Task');
Route::get('/task', [TaskController::class, 'index'])->name('Task');
    Route::post('/task/store', [TaskController::class, 'store'])->name('Task.store'); // Create a task
    // Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('Task'); // Edit a task
    Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('Task.update'); // Update a task
    Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('Task.destroy'); // Delete a task
    Route::get('/tasks/{task}/share', [TaskController::class, 'share'])->name('Task.share'); 
    Route::resource("calendar" , CalendarController::class);
    Route::get("/calendar" , [CalendarController::class , "index"])->name("Calendar");
    Route::put("/calendar/update/{calendar}" , [CalendarController::class , "update"])->name("updateCalendar");
    Route::delete("/calendar/delete/{calendar}" , [CalendarController::class , "destroy"])->name("deleteCalendar");
require __DIR__.'/auth.php';
