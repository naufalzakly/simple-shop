<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Public\ProductController;
use App\Http\Middleware\EnsureAuthCustomer;
use Illuminate\Support\Facades\Auth;
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



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home.index');
})->name('home.index');

// Route::get('/home', function() {
//     return view('home.index');
// })->name('home.index');



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');


Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class,'store'])->name('category.store');

Route::get('/category/detail/{id}', [CategoryController::class,'detail'])->name('category.detail');

Route::middleware(EnsureAuthCustomer::class)->group(function () {
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/',[ProductController::class,'index'])->name('index');
        });
        

});
