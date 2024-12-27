<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminContoller;

//Route::get('/', function () {
   // return view('welcome');
//});


Route::get('/', [AdminContoller::class, 'index']);
Route::get('/hello', [AdminContoller::class, 'hello'])->name('dashboard');
Route::get('/banner', [AdminContoller::class, 'banner'])->name('banner');
Route::get('/product', [AdminContoller::class, 'product'])->name('product');
Route::get('/addbanner', [AdminContoller::class, 'addbanner'])->name('addbanner');


