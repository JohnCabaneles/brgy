<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PermitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangayIdController;
use App\Http\Controllers\IncidentReportController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Official\OfficialController;
use App\Http\Controllers\UserDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/officials', OfficialController::class);
Route::resource('/staffs', StaffController::class);
Route::resource('/barangayId', BarangayIdController::class);
Route::resource('/permits', PermitController::class);
Route::resource('/events', EventController::class);
Route::resource('/incidentReport', IncidentReportController::class);
Route::resource('/events', EventController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('user')->group(function(){
    Route::resource('/dashboard', UserDashboardController::class);
});

require __DIR__.'/auth.php';
