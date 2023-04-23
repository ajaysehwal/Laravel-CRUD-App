<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
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

Route::post('add',[users::class,'addData']);
Route::view('add','adduser');
Route::view('list','memberlist');
Route::get('list',[users::class,'colldata']);
Route::get('delete/{id}',[users::class,'delete']);
Route::get('edit/{id}',[users::class,'updatedata']);
Route::post('edit',[users::class,'update']); 