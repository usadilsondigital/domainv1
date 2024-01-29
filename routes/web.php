<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutonomoussystemController;

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

Route::get('/consume', [AutonomoussystemController::class, 'index']);