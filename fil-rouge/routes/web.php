<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
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
// Route::get('addtocart', [ CartController::class,'addProductToCart']);*

Route::get('modal', function(){
    return view ('cart.modal');

});
Route::controller(CartController::class)->group(function(){
Route::get('remove_cart_item{id}','RemoveCartItem')->name('removeitem');

    route::get('addtocart','addToCart')->name('addtocart');
    route::post('addtocart','addProductToCart')->name('addproducttocart');
    route::post('shipping','AddShippingInfo')->name('shipping');
    route::post('place_order','PlaceOrder')->name('placeorder');

    route::get('pending_order','PendingOrder')->name('pendingorder');

    route::get('/checkout','checkout')->name('checkout');
    route::get('/shipping_adress','GetShippingAdress')->name('shippinginfo');
    route::get('/get-all-carts','getAllCarts')->name('getallcarts');
    route::get('/get-all-orders','getAllOrders')->name('getallorders');
    Route::put('/orders/{id}/status', 'updateOrderStatus')->name('update.order.status');

    route::get('/get-all-payment','getPayment')->name('getpayment');






});
Route::get('user-dashboard', function(){
    return view('user-dashboard');
});

// Route::get('remove{id}',[CartController::class,'removeCartItem'] 
// );
// Route::get('addtocart',[CartController::class,'addProductToCart'] 
    // return view('cart.show-single-product');
    // return 'adddcarrt';
// );

Route::get('side', function(){
    return view('layouts.side');
});

Route::resource('/category', CategoryController::class);
Route::get('/category{id}/edit', [CategoryController::class, 'edit'])->name('editcategory');

Route::resource('/subcategories', SubcateroryController::class);
Route::get('/subcategories{id}/edit', [SubcateroryController::class, 'edit'])->name('editsubcategory');
Route::put('/subcategories{subcategory}/update', [SubcateroryController::class, 'update'])->name('updatesubcategory');



Route::get('/subcat', [SubcateroryController::class,'index']);

Route::resource('/products', ProductsController::class);
Route::get('/products{id}/edit', [ProductsController::class, 'edit'])->name('editproduct');
Route::get('/productByCat', [ProductsController::class, 'productByCat'])->name('productbycat');
Route::get('/shopcat',function(){
    return view('productbycat');
});
Route::get('/about',function(){
    return view('about');
});




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
Route::get('/shop',[ProductsController::class, 'shop']);
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



// ==============>


// Route::post("stripePay", [PaymentController::class, 'stripePost']) ;
  
Route::controller(PaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripePay', 'stripePost');
});
