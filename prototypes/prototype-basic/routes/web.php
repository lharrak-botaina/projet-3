<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BriefController;

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
Route::resource('brief',BriefController::class);
// Route::resource('task',TaskController::class)->except('task.create');
Route::get('task', [TaskController::class, 'index'])->name('task.index');

Route::get('task/{id}',[TaskController::class, 'create'])->name('task.create');
Route::post('task', [TaskController::class, 'store'])->name('task.store');
Route::get('task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('task/{id}', [TaskController::class, 'update'])->name('task.update');
Route::delete('task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');

