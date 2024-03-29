<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


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
    return view('frontpage');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


route::group(['middleware'=>['auth']],function(){

Route::resource('roles', RolesController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);


});
