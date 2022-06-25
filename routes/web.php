<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
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
    return view('layout.home');
});
Route::get('/master', function () {
    return view('layout.master');
});


Route::get('/home',[ViewController::class,'home']);
Route::get('/book',[ViewController::class,'book']);
Route::get('/join',[ViewController::class,'join']);
Route::get('/clinics',[ViewController::class,'clinics']);
Route::get('/clinic',[ViewController::class,'clinic']);
Route::get('/about',[ViewController::class,'about']);
Route::get('/contact',[ViewController::class,'contact']);
Route::get('/user',[ViewController::class,'user']);

