<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;

// home routes
Route::get('/', [HomeController::class, 'index'])->name('home');
// authorization routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware('auth:admin')->post('/logout', [AuthController::class, 'logout'])->name('logout');
//appointment routes
Route::get('/appointment', [AppointmentController::class, 'create'])->name('appointment');
Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
Route::get('/appointment/thank-you', function () {
    return view('appointment.thankyou');})->name('appointment.thankyou');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



// admin routes
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/patient/{id}/edit', [AdminController::class, 'edit'])->name('admin.patient.edit');
    Route::put('/admin/patient/{id}/edit', [AdminController::class, 'update'])->name('admin.patient.update');
    Route::delete('/admin/patient/{id}', [AdminController::class, 'destroy'])->name('admin.patient.destroy');
    Route::get('/admin/messages', [ContactController::class, 'index'])->name('admin.messages');
    Route::delete('/admin/messages/{id}', [ContactController::class, 'destroy'])->name('admin.messages.destroy');
    Route::get('/admin/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');
});
