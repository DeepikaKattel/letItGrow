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
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
Route::post('/contactStore', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact.store');

Route::get('/career', [App\Http\Controllers\FrontEndController::class, 'career'])->name('career');
Route::resource('careers','App\Http\Controllers\CareerController');
