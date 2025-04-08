<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('clients', ClientController::class);
Route::resource('voitures', CarController::class);
Route::resource('users', UserController::class);

Route::get('/create', [AuthController::class,'create'])->name('auth.create');
Route::post('/store', [AuthController::class,'store'])->name('auth.store');
Route::get('/login', [AuthController::class,'login'])->name('auth.login');
Route::post('/verif', [AuthController::class,'verifLogin'])->name('auth.verifLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
