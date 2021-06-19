<?php

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
});
