<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/task-list', [TaskController::class, 'index'])->name('tasklist.index');
    Route::get('/task-create', [TaskController::class, 'create'])->name('tasklist.addtask');
    Route::post('/task-store', [TaskController::class, 'store'])->name('tasklist.storetask');
    Route::delete('/task-delete/{id}', [TaskController::class, 'destroy'])->name('tasklist.destroy');
    Route::get('/task-complete/{id}', [TaskController::class, 'complete'])->name('tasks.complete');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
