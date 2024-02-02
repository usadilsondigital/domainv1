<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutonomoussystemController;
use App\Http\Controllers\ConsumerController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/as', [AutonomoussystemController::class, 'index']);

Route::get('/consumer', [ConsumerController::class, 'index']);
Route::get('/consum', [ConsumerController::class, 'create']);

Route::get('/test', [ConsumerController::class, 'searcher']);