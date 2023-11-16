<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\HalamanjavaController;
use App\Http\Controllers\HalamanjavascriptController;
use App\Http\Controllers\HalamanlaravelController;
use App\Http\Controllers\HalamanrubyController;
use App\Http\Controllers\JavaController;
use App\Http\Controllers\JavascriptController;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RubyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

//route login admin
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::post('/logout', [LoginController::class, 'logout']);
//route untuk register admin
Route::get('/register', [LoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('/registeradmin', [LoginController::class, 'registeradmin'])->name('registeradmin');
//route resource crud data untuk posts
Route::resource('/posts', PostController::class);
//route untuk ke halaman utama
Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/RecentPosts/{id}', [DetailController::class, 'posts'])->name('user.recentPosts');
//Route Untuk Halaman Admins
Route::get('/halamanAdmin', function () {
    return view('navAdmin');
})->middleware('auth');
// route untuk search pada user
Route::get('/search', [HomeController::class, 'cari'])->name('user.index');
//Route resource crud data untuk laravel
Route::resource('/laravel', LaravelController::class)->middleware('auth');
Route::delete('deletelaravel/{id}/destroy', [App\Http\Controllers\LaravelController::class, 'destroy'])->name('laravel.destroy');
// Route::delete('/deletelaravel/{id}', [LaravelController::class, 'destroy'])->name('laravel.destroy');
//Route resource crud data untuk Java
Route::resource('/java', JavaController::class)->middleware('auth');
Route::delete('deletejava/{id}/destroy', [App\Http\Controllers\JavaController::class, 'destroy'])->name('java.destroy');
//Route resource crud data untuk JavaScript
Route::resource('/javascript', JavascriptController::class)->middleware('auth');
Route::delete('deletejavascript/{id}/destroy', [App\Http\Controllers\JavascriptController::class, 'destroy'])->name('javascript.destroy');
//Route resource crud data untuk Ruby
Route::resource('/ruby', RubyController::class)->middleware('auth');
Route::delete('rubyjavascript/{id}/destroy', [App\Http\Controllers\RubyController::class, 'destroy'])->name('ruby.destroy');
//route untuk halaman laravel pada user
Route::get('/halamanLaravel', [HalamanlaravelController::class, 'index'])->name('user.halamanLaravel');
Route::get('/detailLaravel/{id}', [DetailController::class, 'laravel'])->name('user.detailLaravel');
//route untuk halaman java script untuk user
Route::get('/halamanjavascript', [HalamanjavascriptController::class, 'index'])->name('user.halamanjavascript');
Route::get('/detailJavascript/{id}', [DetailController::class, 'javascript'])->name('user.detailjavascript');
//route untuk halaman java untuk user
Route::get('/halamanjava', [HalamanjavaController::class, 'index'])->name('user.halamanjava');
Route::get('/detailJava/{id}', [DetailController::class, 'java'])->name('user.detailjava');
//route untuk halaman ruby untuk user
Route::get('/halamanRuby', [HalamanrubyController::class, 'index'])->name('user.halamanruby');
Route::get('/detailruby/{id}', [DetailController::class, 'ruby'])->name('user.detailruby');
// Route::delete('/deletelaravel', [LaravelController::class, 'delete'])->name('laravel.delete');