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
})->middleware(['auth'])->name('support');

Route::get('/dashboard/adm', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/services', function () {
    return view('services');
})->middleware(['auth'])->name('services');

Route::get('/equipments', function () {
    return view('equipments');
})->middleware(['auth'])->name('equipments');

Route::get('/equipments_list', function () {
    return view('equipments_list');
})->middleware(['auth'])->name('equipments_list');

Route::get('/edit', function () {
    return view('update');
})->middleware(['auth'])->name('update');

Route::model('service', Service::class);
Route::get('/dashboard/edit/{service}',[ServiceController::class, 'edit'])->name('edit-service');

// Route::model('service', Service::class);
Route::put('/dashboard/update/{service}', [ServiceController::class, 'update'])->name('update-service')->middleware(['auth']);

Route::post('/services',[ServiceController::class, 'store'])->name('add-service');

Route::post('/equipments',[EquipmentController::class, 'store'])->name('add-equipment');

Route::get('/show-equipment', function () {
    return view('equipment_detail');
})->middleware(['auth'])->name('equipment_detail');

Route::get('/dashboard/equipments_list/show/{equipment}',[EquipmentController::class, 'show'])->name('show-equipment');

Route::get('/show-service', function () {
    return view('service_detail');
})->middleware(['auth'])->name('service_detail');

Route::model('service', Service::class);
Route::get('/dashboard/show/{service}',[ServiceController::class, 'show'])->name('show-service');

// Route::model('equipment', Equipment::class);
Route::get('/dashboard/{equipment}',[EquipmentController::class, 'destroy'])->name('rm-equipment');

Route::model('service', Service::class);
Route::get('/dashboard/delete/{service}',[ServiceController::class, 'destroy'])->name('rm-service');

require __DIR__.'/auth.php';
