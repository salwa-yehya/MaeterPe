<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Middleware\RedirectIfAuthenticated;


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

    Route::post('/user/profile/store' , [UserController::class , 'UserProfileStore'])->name('user.profile.store');

    Route::get('/user/logout' , [UserController::class , 'UserLogout'])->name('user.logout');

    Route::post('/user/update/password' , [UserController::class , 'UserUpdatePassword'])->name('user.update.password');


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

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//middleware
Route::middleware(['auth','role:admin'])->group(function() {

    //category
Route::controller(CategoryController::class)->group(function(){
    Route::get('/all/category' , 'AllCategory')->name('all.category');
    Route::get('/add/category' , 'AddCategory')->name('add.category');
    Route::post('/store/category' , 'StoreCategory')->name('store.category');
    Route::get('/edit/category/{id}' , 'EditCategory')->name('edit.category');
    Route::post('/update/category' , 'UpdateCategory')->name('update.category');
    Route::get('/delete/category/{id}' , 'DeleteCategory')->name('delete.category');

});//end category


    //Product
Route::controller(ProductController::class)->group(function(){
    Route::get('/all/product' , 'AllProduct')->name('all.product');
    Route::get('/add/product' , 'AddProduct')->name('add.product');
    Route::post('/store/product' , 'StoreProduct')->name('store.product');
    Route::get('/edit/product/{id}' , 'EditProduct')->name('edit.product');
    Route::post('/update/product' , 'UpdateProduct')->name('update.product');
    Route::post('/update/product/image' , 'UpdateProductImage')->name('update.product.image');
    Route::get('/product/inactive/{id}' , 'ProductInactive')->name('product.inactive');
    Route::get('/product/active/{id}' , 'ProductActive')->name('product.active');
    Route::get('/delete/product/{id}' , 'ProductDelete')->name('delete.product');


});//end Product

 // Slider All Route 
 Route::controller(SliderController::class)->group(function(){
    Route::get('/all/slider' , 'AllSlider')->name('all.slider');
    Route::get('/add/slider' , 'AddSlider')->name('add.slider');
    Route::post('/store/slider' , 'StoreSlider')->name('store.slider');
    Route::get('/edit/slider/{id}' , 'EditSlider')->name('edit.slider');
    Route::post('/update/slider' , 'UpdateSlider')->name('update.slider');
    Route::get('/delete/slider/{id}' , 'DeleteSlider')->name('delete.slider');

});


});//end middleware
?>