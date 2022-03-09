<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\IndexController;
use App\Http\Controllers\admin\UserController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about-us', function () {
    return view('about-us');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

});

