<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/customize', function () {
    return view('customize');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function() {
   Route::get('/admin/dashboard' , [AdminController::class , 'AdminDashboard'])->name('admin.dashboard');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::middleware(['auth', 'Role'])->name('admin.')->prefix('admin')->group(function (){
// Route::get('/dashboard' ,[AdminController::class , 'AdminDashboard'])->name('dashboard');

// });
