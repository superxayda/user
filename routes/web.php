<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baivietController;
use App\Http\Controllers\TestUserController;
use App\Http\Controllers\BlogController;

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

Route::get('/test', [App\Http\Controllers\TestController::class, 'index1',])->name('tester');

Route::get('/testUser', [App\Http\Controllers\TestUserController::class, 'create']);

Route::post('/testUser', [App\Http\Controllers\TestUserController::class, 'store'])->name('user.store');

Route::resource('/baiviet', App\Http\Controllers\baivietController::class);
Route::resource('/blog', App\Http\Controllers\BlogController::class);
Route::resource('/user', App\Http\Controllers\UserController::class);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

