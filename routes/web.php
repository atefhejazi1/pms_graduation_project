<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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
    return view('index');
});

Route::get('/dashboard', [dashController::class, 'getNumberOfRows'])
    ->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::prefix('users')->controller(UserController::class)->middleware(['auth'])->group(function () {
    Route::get('/allUsers', 'index');
});


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

Route::prefix('service')->controller(ServiceController::class)->middleware(['auth'])->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
    Route::get('/getService', 'getService');
    Route::get('/requestService/{id}', 'requestService');
    Route::post('/RequestServiceStore', 'RequestServiceStore');
    Route::get('/allServicesRequested', 'allServicesRequested');
    Route::get('/active/{id}', 'active');
});


Route::prefix('offer')->controller(OfferController::class)->middleware(['auth'])->group(function () {
    Route::get('/all', 'index');
    Route::get('/add', 'create');
    Route::post('/store', 'store');
    Route::get('/edit/{id}', 'edit');
    Route::post('/update', 'update');
    Route::get('/delete/{id}', 'destroy');
});





Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact/store', [ContactController::class, 'store']);
