<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[ContactController::class,'index'])->name('index');
Route::post('/',[ContactController::class,'save'])->name('save');

Route::group(['prefix'=>'admin'], function(){
    Route::get('/{token}',[AdminController::class,'dashboard'])->name('dashboard');
});

