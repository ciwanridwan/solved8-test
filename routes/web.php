<?php

use App\Http\Controllers\TimeSheetController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('pages.forms');
});

Route::get('/apps', function () {
    return view('layouts.apps');
});

// First Page
Route::get('/first-page', [TimeSheetController::class, 'firstPage'])->name('first-page');

// Second Page
Route::get('/second-page', [TimeSheetController::class, 'secondPage'])->name('second-page');




