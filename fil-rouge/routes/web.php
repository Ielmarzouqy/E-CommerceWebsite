<?php

use  App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;

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

Route::resource('/categories', CategoryController::class);
Route::resource('/product', ProductController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/statistic', function () {
    return view('statistic');
});
Route::get('/shop', function () {
    return view('/shop');
});
Route::get('/contact', function(){
return view('/contact-us');
});
Route::get('/alert', function(){
    return view('layouts.alert');
});
Route::get('/add-product',function(){
    return view('products.create');
});

Route::get('/side',function(){
    return view('layouts.sidebar');
});

Route::get('/add-category',function(){
    return view('category.create');
});
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Route::get('product',function(){
//     return 'products.create';
// });