<?php

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
Route::get('/banner', function () {return view('banner');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('news/store', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::get('news/edit/{id}', [\App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
Route::get('news/destroy/{id}', [\App\Http\Controllers\NewsController::class, 'destroy'])->name('news.destroy');
Route::post('news/update', [\App\Http\Controllers\NewsController::class, 'update'])->name('news.update');

Route::get('/project', [\App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::get('project/create', [\App\Http\Controllers\ProjectController::class, 'create'])->name('project.create');
Route::post('project/store', [\App\Http\Controllers\ProjectController::class, 'store'])->name('project.store');
Route::get('projects/edit/{id}', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('project.edit');
Route::get('project/destroy/{id}', [\App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.destroy');
Route::post('project/update', [\App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');
