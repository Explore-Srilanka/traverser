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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/add_district', [App\Http\Controllers\HomeController::class, 'add_district'])->name('add_district');
    Route::post('/admin/add/district', [App\Http\Controllers\HomeController::class, 'store_district'])->name('admin.add.district');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
