<?php

use App\Http\Controllers\DumpController;
use App\Http\Controllers\DumpTypeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'users'], function () {
    Route::get('index', [UserController::class, 'index'])->name('users.index');
    
});

Route::group(['prefix' => 'faculties'], function () {
    Route::get('index', [FacultyController::class, 'index'])->name('faculties.index');
    Route::post('create', [FacultyController::class, 'create'])->name('faculties.create');
});

Route::group(['prefix' => 'dumps'], function () {
    Route::get('index', [DumpController::class, 'index'])->name('dumps.index');
    Route::post('create', [DumpController::class, 'create'])->name('dumps.create');
});

Route::group(['prefix' => 'dumptypes'], function () {
    Route::get('index', [DumpTypeController::class, 'index'])->name('dumptypes.index');
    Route::post('create', [DumpTypeController::class, 'create'])->name('dumptypes.create');
});