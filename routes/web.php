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
    return view('banner');
});
Route::get('/banner', function () {return view('banner');});
Route::get('/info_org', function () {return view('info_org');});
Route::get('/address', function () {return view('address');});
Route::get('/dei', function () {return view('dei');});
Route::get('/staff', function () {return view('staff');});
Route::get('/partners', function () {return view('partners');});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news.index');
Route::get('news/create', [\App\Http\Controllers\NewsController::class, 'create'])->name('news.create');
Route::post('news/store', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
Route::get('news/edit/{id}', [\App\Http\Controllers\NewsController::class, 'edit'])->name('news.edit');
Route::get('news/destroy/{id}', [\App\Http\Controllers\NewsController::class, 'destroy'])->name('news.destroy');
Route::post('news/update', [\App\Http\Controllers\NewsController::class, 'update'])->name('news.update');
Route::get('news/show/{param}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news.show');

Route::get('/project', [\App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::get('project/create', [\App\Http\Controllers\ProjectController::class, 'create'])->name('project.create');
Route::post('project/store', [\App\Http\Controllers\ProjectController::class, 'store'])->name('project.store');
Route::get('projects/edit/{id}', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('project.edit');
Route::get('project/destroy/{id}', [\App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.destroy');
Route::post('project/update', [\App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');
Route::get('project/show/{pr}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');
