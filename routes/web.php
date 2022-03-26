<?php

use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/******* Public Routes *********/
Route::get('/home', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about');
});

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile']);
Route::post('/profile-update', [App\Http\Controllers\ProfileController::class, 'update'])->name('users.edit');

//shop routes
Route::get('/', [ShopController::class,'index'])->name('index');
Route::get('/home', [ShopController::class,'index']);
Route::get('/shop', [ShopController::class,'productsList']);
Route::get('/shop/category/{category:slug}', [ShopController::class,'productsCategoryList']);
Route::get('/shop/book/{book:slug}', [ShopController::class,'singleProduct']);

Route::get('/checkout', function () {
    return view('checkout');
});

//cart routes
Route::get('/cart/view-cart', [CartController::class,'viewCart']);
Route::post('/cart/add-to-cart/{book_id}', [CartController::class,'addToCart'])->name('add-to-cart');
Route::post('/cart/Add-To-Cart/{book_id}', [CartController::class,'addToCartFromShop'])->name('Add-To-Cart');
// Route::get('/cart/update-cart', [CartController::class,'updateCart']);
Route::get('/cart/remove-item/{item_id}', [CartController::class,'removeItem']);
Route::get('/cart/checkout',[CartController::class,'checkout'])->name('checkout')->middleware('auth');
Route::post('/cart/checkout',[CartController::class,'placeOrder'])->name('place-order')->middleware('auth');
Route::get('/orders', [OrderController::class,'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/******* Admin Routes *********/
Route::middleware('IsAdmin')->group(function () {
    Route::get('/admin/dashboard', [IndexController::class, 'index'])->name('admin.index');

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/add', [UserController::class, 'create'])->name('admin.users.add');
    Route::post('/admin/users/add', [UserController::class, 'store'])->name('admin.users.store');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/users/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');

    Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books');
    Route::get('/admin/books/add', [BookController::class, 'create'])->name('admin.books.add');
    Route::post('/admin/books/add', [BookController::class, 'store'])->name('admin.books.store');
    Route::delete('/admin/books/{id}', [BookController::class, 'destroy'])->name('admin.books.destroy');
    Route::get('/admin/books/{id}', [BookController::class, 'edit'])->name('admin.books.edit');
    Route::put('/admin/books/{id}', [BookController::class, 'update'])->name('admin.books.update');

    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('/admin/categories/add', [CategoryController::class, 'create'])->name('admin.categories.add');
    Route::post('/admin/categories/add', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::delete('/admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    Route::get('/admin/categories/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');


    Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('/admin/orders/{id}', [OrderController::class, 'edit'])->name('admin.orders.edit');
    Route::put('/admin/orders/{id}', [OrderController::class, 'update'])->name('admin.orders.update');
});

