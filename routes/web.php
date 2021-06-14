<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/category', function () {
    return view('categories.index');
})->name('category');

Route::get('/article', function () {
    return view('articles.index');
})->name('article');


Route::prefix('user')->group( function (){
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/store', [UserController::class, 'store'])->name('storeu');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('updateu');
    Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
});

Route::prefix('article')->group( function (){
    Route::get('/', [ArticleController::class, 'index'])->name('article');
    Route::get('/create', [ArticleController::class, 'create']);
    Route::post('/store', [ArticleController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ArticleController::class, 'update'])->name('updatea');
    Route::get('/delete/{id}', [ArticleController::class, 'destroy'])->name('delete');
});

Route::prefix('category')->group( function (){
    Route::get('/', [CategoryController::class, 'index'])->name('category');
    Route::get('/create', [CategoryController::class, 'create']);
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
});

