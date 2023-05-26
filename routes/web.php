<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OriginalController;
use App\Http\Controllers\Admin\MypageController;
use App\Http\Controllers\Admin\ShrineController;






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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



 Route::get('/', [OriginalController::class, 'index'])->name('top');
 Route::get('/service', [OriginalController::class, 'service'])->name('service');
 Route::get('/list', [OriginalController::class, 'list'])->name('list');

 
 
 
 
 
Route::controller(MypageController::class)->prefix('mypage')->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('mypage');
});

Route::controller(ShrineController::class)->name('shrine.')->middleware('auth')->group(function () {
    Route::get('/newpost', 'add')->name('newpost');
    Route::post('/newpost', 'create')->name('create');
    Route::get('/edit','edit')->name('edit');
    Route::post('/edit','update')->name('update');
});
 
