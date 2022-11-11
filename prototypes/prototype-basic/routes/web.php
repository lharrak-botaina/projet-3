<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\briefController;
use App\Http\Controllers\tasksController;

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
Route::resource('brief',briefController::class);
Route::resource('/brief/task',tasksController::class);
Route::get('/brief/{token}/task',[tasksController::class,'create']);
