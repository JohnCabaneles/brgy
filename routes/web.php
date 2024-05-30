<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Permit\PermitController;
use App\Http\Controllers\Permit\UserPermitController;
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
Route::resource('/permits', PermitController::class);
Route::resource('/events', EventController::class);
Route::resource('/incidentReport', IncidentReportController::class);
Route::resource('/events', EventController::class);

//Barangay ID Routes
Route::get('/barangayId', [BarangayIdController::class, 'index']);
Route::post('/barangayId/{user}', [BarangayIdController::class, 'store'])->name('barangayId.store');
Route::patch('/barangay/id/{user}', [BarangayIdController::class, 'update'])->name('brgyId.update');
Route::get('/barangayId/edit/{user}', [BarangayIdController::class, 'edit'])->name('barangayId.edit');
Route::delete('/barangayId/delete/{user}', [BarangayIdController::class, 'destroy'])->name('barangayId.destroy');
Route::get('/barangayId/search', [BarangayIdController::class, 'search'])->name('barangayId.search');

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
    Route::resource('/permit', UserPermitController::class);
});

Route::get('/checkout/success', [UserPermitController::class, 'success'])->name('redirects.success');

# for pdf download
Route::get('/download-business-permit-pdf/{id}', [PermitController::class, 'downloadPdf'])->name('download.business_permit_pdf');

#testing routes
require __DIR__.'/auth.php';
