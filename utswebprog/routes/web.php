<?php

use App\Http\Controllers\ViewController;
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
Route::get('/', [ViewController::class, 'displayHome']);
Route::redirect('/category', '/');
Route::redirect('/book', '/');

Route::get('/category/{category}', [ViewController::class, 'displayCategory']);
Route::get('/book/{book}', [ViewController::class, 'displayBook']);

Route::get('/contact', [ViewController::class, 'displayContact']);
