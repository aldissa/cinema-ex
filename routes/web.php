<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ConfirmOrderController;
use App\Http\Controllers\API\MovieController;
use App\Http\Controllers\API\SeatSelectionController;
use App\Http\Middleware\IsAuth;
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

Route::group(['middleware' => 'guest'], function(){
    Route::get('/', [AuthController::class, 'index'])->name('formlogin');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'IsAuth'], function(){
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('change-password', [AuthController::class, 'changePassword'])->name('changePassword');
    Route::post('update-password', [AuthController::class, 'updatePassword'])->name('updatePassword');
    
    
    Route::get('movie', [MovieController::class, 'showMovies'])->name('movie');
    Route::get('seat-selection', [SeatSelectionController::class, 'index'])->name('seatSelection');
    Route::post('confirm-order', [ConfirmOrderController::class, 'index'])->name('confirmOrder'); 
    Route::post('create-order', [ConfirmOrderController::class, 'createOrder'])->name('createOrder'); 
});