<?php

use App\Http\Controllers\ActivityController;
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
Route::controller(ActivityController::class)->group(function () {
    Route::get('/', 'index')->name('activities.index');
    Route::get('/activities', 'search')->name('activities.search');
    Route::post('/activities/buy', 'buy')->name('activities.buy');
}); 
