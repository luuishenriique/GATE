<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\AttendanceController;
use App\Models\Service;
use App\Models\Equipment;
use App\Models\Attendance;

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

Route::get('/close-service', function () {
    return view('close_service');
})->middleware(['auth'])->name('close_service');

Route::get('/equipments', function () {
    return view('equipments');
})->middleware(['auth'])->name('equipments');

Route::get('/equipments_list', function () {
    return view('equipments_list');
})->middleware(['auth'])->name('equipments_list');

Route::get('/edit', function () {
    return view('update');
})->middleware(['auth'])->name('update');

Route::get('/edit-equipment', function () {
    return view('update_equipment');
})->middleware(['auth'])->name('update_equipment');

Route::model('equipment', Equipment::class);
Route::get('/dashboard/edit-equipment/{equipment}',[EquipmentController::class, 'edit'])->name('edit-equipment');

Route::model('service', Service::class);
Route::get('/dashboard/edit/{service}',[ServiceController::class, 'edit'])->name('edit-service');

Route::put('/dashboard/update-equipment/{equipment}', [EquipmentController::class, 'update'])->name('update-equipment')->middleware(['auth']);

// Route::model('service', Service::class);
Route::put('/dashboard/update-service/{service}', [ServiceController::class, 'update'])->name('update-service')->middleware(['auth']);

Route::put('/dashboard/update-attend/{service}', [ServiceController::class, 'attend'])->name('attend-service')->middleware(['auth']);

Route::post('/services',[ServiceController::class, 'store'])->name('add-service');

Route::post('/equipments',[EquipmentController::class, 'store'])->name('add-equipment');

Route::model('service', Service::class);
Route::post('/attendances/{service}',[AttendanceController::class, 'store'])->name('add-attend');

Route::get('/show-equipment', function () {
    return view('equipment_detail');
})->middleware(['auth'])->name('equipment_detail');

Route::get('/dashboard/equipments_list/show/{equipment}',[EquipmentController::class, 'show'])->name('show-equipment');

Route::get('/show-service', function () {
    return view('service_detail');
})->middleware(['auth'])->name('service_detail');

Route::get('/show-service-user', function () {
    return view('service_detail_user');
})->middleware(['auth'])->name('service_detail_user');

Route::get('/service-attend', function () {
    return view('attend_service');
})->middleware(['auth'])->name('attend_service');

Route::get('/new-attend', function () {
    return view('new_attend');
})->middleware(['auth'])->name('new_attend');

Route::model('service', Service::class);
Route::get('/dashboard/attend-new/{service}',[ServiceController::class, 'newAttend'])->name('new-attend');

Route::model('service', Service::class);
Route::get('/dashboard/attend-show/{service}',[ServiceController::class, 'showAttend'])->name('show-attend');

Route::model('service', Service::class);
Route::get('/dashboard/show-service/{service}',[ServiceController::class, 'show'])->name('show-service');

Route::model('service', Service::class);
Route::get('/dashboard/show-service-user/{service}',[ServiceController::class, 'showUser'])->name('show-user');

Route::model('service', Service::class);
Route::get('/dashboard/close-service/{service}',[ServiceController::class, 'close'])->name('close-service');

// Route::model('equipment', Equipment::class);
Route::get('/dashboard/{equipment}',[EquipmentController::class, 'destroy'])->name('rm-equipment');

Route::model('service', Service::class);
Route::get('/dashboard/delete/{service}',[ServiceController::class, 'destroy'])->name('rm-service');

require __DIR__.'/auth.php';
