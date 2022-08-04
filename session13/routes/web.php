<?php

use App\Http\Controllers\UserController;
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


Route::get('/', [UserController::class, 'home'])->middleware('access');

Route::get('/login', [UserController::class, 'viewlogin']);

Route::get('/register', [UserController::class, 'viewregister']);


Route::get('/home', [UserController::class, 'home'])->middleware('access');



Route::get('/changepassword', [UserController::class, 'viewchangepassword'])->middleware('access');

Route::post('/register', [UserController::class,'register']);

Route::post('/login', [UserController::class, 'login']);


Route::put('/changepassword', [UserController::class, 'changepassword'])->middleware('access');

Route::get('/logout', [UserController::class, 'logout'])->middleware('access');
