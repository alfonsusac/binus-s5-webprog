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
// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\PageController;
use App\Http\Controllers\Session8Controller;

Route::get('/', [PageController::class, 'welcomePage'] );
Route::get('/LA01', [PageController::class, 'indexPage']);
Route::get('/LA01/home', [PageController::class, 'homePage']);
Route::get('/user/{name}', [PageController::class, 'displayName'])->where('name','[A-Za-z]+');

// Week 5
Route::get('/LA01/if', 'PageController@indexPage');
Route::get('/LA01/display', 'PageController@displayPage');
Route::get('/LA01/ifelse', 'PageController@ifelsePage');
Route::get('/LA01/switch', 'PageController@switchPage');
Route::get('/LA01/for', 'PageController@forPage');
Route::get('/LA01/while', 'PageController@whilePage');
Route::get('/LA01/foreach', 'PageController@foreachPage');
Route::get('/LA01/forelse', 'PageController@forelsePage');
Route::get('/LA01/cnb', 'PageController@cnbPage');

Route::get('/mahasiswa', [DatabaseController::class, 'index']);
//Route::get('/mahasiswa-insert',[DatabaseController::class, 'insert']);
//Route::get('/mahasiswa-update',[DatabaseController::class, 'update']);
Route::get('member-list', [MemberController::class, 'member']);

Route::get('/song-list', [PageController::class, 'viewSongList']);


Route::post     ('/albums/insert',          [Session8Controller::class, 'album_insert']);


Route::put      ('/albums/update/{id}',      [Session8Controller::class, 'album_update']);


Route::delete   ('/songs/delete/{id}',       [Session8Controller::class, 'song_delete']);


Route::post     ('/songs/insert/{id}',       [Session8Controller::class, 'song_insert']);


Route::put      ('/statistics/update/{id}',  [Session8Controller::class, 'stats_update']);


Route::delete   ('/albums/delete/{id}',      [Session8Controller::class, 'album_delete']);
