<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::prefix('department')->controller(DepartmentController::class)->middleware(['auth'])->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});

Route::prefix('blog')->controller(BlogController::class)->middleware(['auth'])->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});
