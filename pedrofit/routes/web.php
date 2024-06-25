<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Usercontroller;
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

require __DIR__.'/auth.php';



Route::get('/users', [Usercontroller::class, 'loadAllUsers']);
Route::get('add/user', [Usercontroller::class, 'loadAddUserForm']);
Route::post('add/user', [Usercontroller::class, 'AddUser'])->name('AddUser');
Route::get('/edit/{id}', [Usercontroller::class,'loadEditForm']);
Route::get('/delete/{id}', [Usercontroller::class,'deleteUser']);

