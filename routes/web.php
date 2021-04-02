<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactusController;

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

//Route Prefix merujuk ke ProductController untuk menampilkan halaman product
Route::prefix('product')->group(function(){
    Route::get('/',[ProductController::class,'product']);
});

Route::prefix('product')->group(function(){
    Route::get('/{id}',[ProductController::class,'products']);
});

//Route Param menampilkan Halaman News berisi Daftar berita
Route::get('/news/{name?}', function ($name = null){
    if($name){
        echo '<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19>News '.$name.'</a>';
    }
    else{
        echo '<a href=https://www.educastudio.com/news>Home</a> <br><br> <a href=http://127.0.0.1:8000/news/covid>Covid</a>';
    }
});


//Route Prefix merujuk ke ProgramController untuk menampilkan halaman Daftar Program
Route::prefix('program')->group(function(){
    Route::get('/',[ProgramController::class,'program']);
});

Route::prefix('program')->group(function(){
    Route::get('/{id}',[ProgramController::class,'program']);
});

//Route biasa menampilkan halaman about us
Route::get('/about us', function(){
    return'<a href=https://www.educastudio.com/about-us>About Us</a>'; 
});

//Route resource only menampilkan Contact us
//yang merujuk ke ContactusController.php
Route::resource('contactus', ContactusController::class);

