<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthcontroller;
use App\Models\User;

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


Route::get('/',[CustomAuthcontroller::class,'home']);
Route::get('/login',[CustomAuthcontroller::class,'login']);
Route::get('/registration',[CustomAuthcontroller::class,'registration']);
Route::post('/regis-user',[CustomAuthcontroller::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthcontroller::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthcontroller::class,'dashboard']);
Route::get('/auth.list',[CustomAuthcontroller::class,'list']);