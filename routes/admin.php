<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\EnsureAuthAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware(EnsureAuthAdmin::class)->group(function () {
  Route::prefix('product')->name('product.')->group( function () {
      Route::get('/', [ProductController::class,'index'])->name('index');
      Route::get('/create', [ProductController::class,'create'])->name('create');
      Route::post('/store', [ProductController::class,'store'])->name('store');
      Route::get('/edit/{id}', [ProductController::class,'edit'])->name('edit');
      Route::put('/update/{id}', [ProductController::class,'update'])->name('update');
      Route::post('/destroy/{id}', [ProductController::class,'destroy'])->name('destroy');
  });
  
  Route::prefix('post')->name('post.')->group( function () {
      Route::get('/',[PostController::class,'index'])->name('index');
      Route::get('/create',[PostController::class,'create'])->name('create');
      Route::post('/store',[PostController::class,'store'])->name('store');
      Route::get('/edit/{id}', [PostController::class,'edit'])->name('edit');
      Route::put('/update/{id}', [PostController::class,'update'])->name('update');
      Route::post('/destroy/{id}', [PostController::class,'destroy'])->name('destroy');
  });
});