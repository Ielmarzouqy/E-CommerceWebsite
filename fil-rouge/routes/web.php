<?php

use App\Http\Controllers\CartController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use  App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubcateroryController;

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
// Route::get('addtocart', [ CartController::class,'addProductToCart']);
Route::controller(CartController::class)->group(function(){
Route::get('remove_cart_item{id}','RemoveCartItem')->name('removeitem');

    // route::post('addtocart','addProductToCart');
});

// Route::get('remove{id}',[CartController::class,'removeCartItem'] 
// );
Route::get('addtocart',[CartController::class,'AddToCart'] 
    // return view('cart.show-single-product');
    // return 'adddcarrt';
);

Route::get('side', function(){
    return view('layouts.side');
});

Route::resource('/categories', CategoryController::class);
Route::resource('/subcategories', SubcateroryController::class);

Route::get('/subcat', [SubcateroryController::class,'index']);

Route::resource('/products', ProductsController::class);

Route::get('/pro1', function(){
    return view('products.create');
});
// Route::post('createSubCat',[CategoryController::class,'createSubCat'])->name('createSubCat');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/statistic', function () {
    return view('statistic');
});
Route::get('/shop',[ProductsController::class, 'index']);
Route::get('/contact', function(){
return view('/contact-us');
});
Route::get('/alert', function(){
    return view('layouts.alert');
});
Route::get('/add-product',function(){
    return view('products.create');
});

// Route::get('/side',function(){
//     return view('layouts.sidebar');
// });



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