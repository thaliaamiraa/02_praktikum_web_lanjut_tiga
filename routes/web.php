<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
//Route merujuk ke HomeController untuk menampilkan halaman home
Route::get('/home',[HomeController::class,'index']);

//Route merujuk ke ProductController untuk menampilkan halaman home
Route::prefix('product')->group(function(){
    Route::get('/',[ProductController::class,'product']);
});

Route::prefix('product')->group(function(){
    Route::get('/{id}',[ProductController::class,'product']);
});
