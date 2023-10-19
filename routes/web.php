<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//user
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::match(['GET', 'POST'], '/add/user', [UserController::class, 'store'])->name('add_user');
Route::match(['GET', 'POST'], '/edit/user/{id}', [UserController::class, 'update'])->name('edit_user');
Route::get('/delete/user/{id}', [UserController::class, 'destroy'])->name('delete_user');

//category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::match(['GET', 'POST'], '/add/category', [CategoryController::class, 'store'])->name('add_category');
Route::match(['GET', 'POST'], '/edit/category/{id}', [CategoryController::class, 'update'])->name('edit_category');
Route::get('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('delete_category');

//publisher
Route::get('/publishers', [PublisherController::class, 'index'])->name('publishers');
Route::match(['GET', 'POST'], '/add/publisher', [PublisherController::class, 'store'])->name('add_publisher');
Route::match(['GET', 'POST'], '/edit/publisher/{id}', [PublisherController::class, 'update'])->name('edit_publisher');
Route::get('/delete/publisher/{id}', [PublisherController::class, 'destroy'])->name('delete_publisher');

//author
Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::match(['GET', 'POST'], '/add/author', [AuthorController::class, 'store'])->name('add_author');
Route::match(['GET', 'POST'], '/edit/author/{id}', [AuthorController::class, 'update'])->name('edit_author');
Route::get('/delete/author/{id}', [AuthorController::class, 'destroy'])->name('delete_author');


//Books
Route::get('/books', [BookController::class, 'index'])->name('books');
Route::match(['GET', 'POST'], '/add/book', [BookController::class, 'store'])->name('add_book');
Route::match(['GET', 'POST'], '/edit/book/{id}', [BookController::class, 'update'])->name('edit_book');
Route::get('/delete/image/{id}', [BookController::class, 'delete_image'])->name('delete_image');
Route::get('/delete/book/{id}', [BookController::class, 'destroy'])->name('delete_book');

// Promotions
Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions');
Route::match(['GET', 'POST'], '/add/promotion', [PromotionController::class, 'store'])->name('add_promotion');
Route::match(['GET', 'POST'], '/edit/promotion/{id}', [PromotionController::class, 'update'])->name('edit_promotion');
Route::get('/delete/promotion/{id}', [PromotionController::class, 'destroy'])->name('delete_promotion');


// Đăng ký đăng nhập

Route::get('register', [LoginController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'login'])->name('login');
