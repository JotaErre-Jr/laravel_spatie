<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->group(function(){
    //Route::resource('users', AdminController::class)->only('index', 'dashboard')->names('administrador');
    Route::resource('/user', UserController::class)->only(['index'])->names('user');
    Route::get('/index', [IndexController::class, 'index'])->name('index');
    Route::get('/dashboard', [DashController::class, 'dash'])->name('dashboard');

});



/*
    Route::post('/login',[UserController::class, 'login']);
    Route::middleware(['auth:sanctum', 'check.is.user'])->group(function(){
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/dashboard', [DashController::class, 'here'])->name('dashboard');
    Route::get('/index', [indexController::class, 'testeReturn'])->name('index');
    
});

*/