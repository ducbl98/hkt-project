<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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
Route::prefix('post')->group(function (){
    Route::get('/',[PostController::class,'index'])->name('post.index');
    Route::get('/create',[PostController::class,'create'])->name('post.create');
    Route::post('/store',[PostController::class,'store'])->name('post.store');
    Route::get('/{id}/edit',[PostController::class,'edit'])->name('post.edit');
    Route::post('/{id}/update',[PostController::class,'update'])->name('post.update');
    Route::get('/{id}/show',[PostController::class,'show'])->name('post.detail');
    Route::get('/{id}/delete',[PostController::class,'destroy'])->name('post.delete');
});
Route::prefix('category')->group(function (){
    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/{id}/edit',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/{id}/update',[CategoryController::class,'update'])->name('category.update');
});
