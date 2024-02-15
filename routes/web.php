<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\SpecialityController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Doctor Route
Route::middleware(['auth','role:doctor'])->group(function () {
    Route::get('/doctor/dashboard', [DoctorController::class, 'index']);
});

// Patient Route
Route::middleware(['auth','role:patient'])->group(function () {
    Route::get('/patient', [PatientController::class, 'index']);
});


Route::resource('/specialities', SpecialityController::class);

Route::resource('/medicines', MedicineController::class);

Route::resource('/', HomeController::class);

Route::get('/showBySpeciality/{speciality}', [DoctorController::class, 'showBySpeciality'])->name('showBySpeciality');

Route::resource('/doctor', DoctorController::class);

Route::resource('/appointment', AppointmentController::class);
Route::resource('/comment', CommentController::class);
Route::resource('/favorit', FavoritController::class);
Route::resource('/rate', RateController::class);
Route::resource('/consultation', ConsultationController::class);


require __DIR__.'/auth.php';
