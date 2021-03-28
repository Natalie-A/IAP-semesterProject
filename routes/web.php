<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;


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
Route::get('/userregister', function () {
    return view('userregister');
    
});
Route::get('/adminregister', function () {
    return view('adminregister');
    
});
Route::post("users",[UsersController::class,'getData']);
Route::post('admin',[AdminController::class,'getData']);

//Route::view('/',"welcome");
//Route::view('/register',"register");
//Route::post('/store',"register");