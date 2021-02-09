<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EquipmentController;
use App\Models\Service;

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

Route::get('/dashboard/support', function () {
    return view('support');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/adm', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/services', function () {
    return view('services');
})->middleware(['auth'])->name('services');

Route::get('/equipments', function () {
    return view('equipments');
})->middleware(['auth'])->name('equipments');

Route::post('/services',[ServiceController::class, 'store'])->name('add-service');

Route::post('/equipments',[EquipmentController::class, 'store'])->name('add-equipment');

Route::get('/dashboard/delete/{service}',[ServiceController::class, 'destroy'])->name('rm-service');
Route::model('service', Service::class);

Route::post('/dashboard',[ServiceController::class, 'index'])->name('src-service');
Route::model('service', Service::class);

require __DIR__.'/auth.php';
