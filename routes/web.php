<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OriginalController;

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

Route::controller(OriginalController::class)->prefix('admin')->group(function() {
    Route::get('original/create', 'add');
    Route::get('original/create', 'edit');
    Route::get('original/create', 'delate');
    Route::get('original/create', 'update');
    
    Route::get('original/edit', 'add');
    Route::get('original/edit', 'edit');
    Route::get('original/edit', 'delate');
    Route::get('original/edit', 'update');
    
});

