<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', \App\Http\Controllers\MainController::class)->name('main');
Route::get('/{client}', \App\Http\Controllers\EditController::class)->where('client', "[0-9]+")->name('view');
Route::get('/create', [\App\Http\Controllers\CreateController::class, 'create'])->name('create');
Route::post('/', [\App\Http\Controllers\CreateController::class, 'storeClient'])->name('store');

Route::fallback(function (){
    return redirect()->route('main');
});
