<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

// Public Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Course Catalog
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');

// Trainings Page
Route::get('/trainings', [TrainingController::class, 'index'])->name('trainings.index');

// Consultation Page
Route::get('/consultation', [ConsultationController::class, 'index'])->name('consultation.index');

// Research & Publications
Route::get('/publications', [PublicationController::class, 'index'])->name('publications.index');

// Services & Mentorship
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Contact & Booking
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin Inquiries
Route::get('/admin/inquiries', [AdminController::class, 'inquiries'])->name('admin.inquiries');
Route::post('/admin/inquiries/{id}/status', [AdminController::class, 'updateStatus'])->name('admin.inquiries.status');
