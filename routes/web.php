<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('frontend.index');
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

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard' , [UserController::class , 'UserDashboard'])->name('dashboard');

    Route::get('/user/profile/store' , [UserController::class , 'UserProfileStore'])->name('user.profile.store');

});//Group Middleware end

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';

// Admin  Dashboard
Route::middleware(['auth','role:admin'])->group(function() {
   Route::get('/admin/dashboard' , [AdminController::class , 'AdminDashboard'])->name('admin.dashboard');

   Route::get('/admin/logout' , [AdminController::class , 'AdminDestroy'])->name('admin.logout');

   Route::get('/admin/profile' , [AdminController::class , 'AdminProfile'])->name('admin.profile');

   Route::post('/admin/profile/store' , [AdminController::class , 'AdminProfileStore'])->name('admin.profile.store');

   Route::get('/admin/change/password' , [AdminController::class , 'AdminChangePassword'])->name('admin.change.password');

   Route::post('/admin/update/password' , [AdminController::class , 'AdminUpdatePassword'])->name('update.password');
   
});

Route::get('/admin/login' , [AdminController::class , 'AdminLogin']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

