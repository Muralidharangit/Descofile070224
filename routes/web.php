<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function () {
    $clearcache = Artisan::call('optimize:clear');
    echo "cache cleared<br>";
});

//Clear config cache:
Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

// Link Storage:
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage Link Created';
});




Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('admin');
Route::get('/user_list',[UserController::class,'index'])->name('user.list');
Route::get('/contact_list',[ContactController::class,'index'])->name('contact.list');
Route::post('/contact_store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/gallery_list',[GalleryController::class,'index'])->name('gallery.list');
Route::get('/gallery_create',[GalleryController::class,'create'])->name('gallery.create');
Route::post('/gallery_store',[GalleryController::class,'store'])->name('gallery.store');
Route::get('/gallery_edit/{id}',[GalleryController::class,'edit'])->name('gallery.edit');
Route::post('/gallery_update/{id}',[GalleryController::class,'update'])->name('gallery.update');
Route::delete('/gallery_delete/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login-validate', [AuthController::class, 'postLogin'])->name('login.validate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// Route for Frontend
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/product_Peanut_Pepper',[HomeController::class,'productOne'])->name('product.one');
Route::get('/product_Coconut',[HomeController::class,'productTwo'])->name('product.two');
Route::get('/product_Puffed Rice',[HomeController::class,'productThree'])->name('product.three');
Route::get('/product_Peanut Chili',[HomeController::class,'productFour'])->name('product.four');




