<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::post('/', [App\Http\Controllers\ContactController::class, 'store'])->name('sendMail');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts');
Route::get('/contact/{contact}', [App\Http\Controllers\ContactController::class, 'show'])->name('contact');
Route::get('contacts/{contact}/delete', [App\Http\Controllers\ContactController::class, 'destroy'])->name('delete');