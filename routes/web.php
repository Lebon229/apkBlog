<?php

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


Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\ArticlesController::class, 'index'])->name('index');
Route::post('/storearticle', [App\Http\Controllers\HomeController::class, 'storearticle'])->name('storearticle');
Route::get('/like/{id}', [App\Http\Controllers\ArticlesController::class, 'like'])->name('like');
Route::get('/unlike/{id}', [App\Http\Controllers\ArticlesController::class, 'unlike'])->name('unlike');
Route::get('/supprimer/{id}', [App\Http\Controllers\HomeController::class, 'supprimer'])->name('supprimer');
Route::post('/comments', [App\Http\Controllers\HomeController::class, 'comments'])->name('comments');