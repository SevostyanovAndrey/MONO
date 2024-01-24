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

Route::get('/home', \App\Http\Controllers\MainController::class)->name('main');

Route::get('/home/{client}', [\App\Http\Controllers\EditController::class, 'edit'])->where('client', "[0-9]+")->name('view');
Route::patch('/home/{client}/updateClient', [\App\Http\Controllers\EditController::class, 'updateClient'])->where('client', "[0-9]+")->name('updateClient');
Route::patch('/home/{client}/updateAuto', [\App\Http\Controllers\EditController::class, 'updateAuto'])->where('client', "[0-9]+")->name('updateAuto');
Route::delete('/home/{client}/deleteClient',[\App\Http\Controllers\DeleteController::class, 'destroyUser'])->where('client', "[0-9]+")->name('destroyUser');
Route::delete('/home/{client}/deleteAuto',[\App\Http\Controllers\DeleteController::class, 'destroyAuto'])->where('client', "[0-9]+")->name('destroyAuto');
Route::get('/create', [\App\Http\Controllers\CreateController::class, 'create'])->name('create');
Route::post('/', [\App\Http\Controllers\CreateController::class, 'store'])->name('store');
Route::post('/home', [\App\Http\Controllers\CreateController::class, 'storeAuto'])->name('storeAutos');

Route::fallback(function (){
    return redirect()->route('main');
});
