<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\EventsController;

// ---------------------- ADMIN ROUTES ----------------------

// Admin login page
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

// Admin login authentication
Route::post('/admin/login', function (Illuminate\Http\Request $request) {

    if ($request->code === config('admin.code')) {
        session(['is_admin' => true]);
        return redirect('/admin/dashboard');
    }

    return back()->withErrors(['code' => 'Invalid admin code']);

})->name('admin.authenticate');

// Admin logout
Route::post('/admin/logout', function () {
    session()->forget('is_admin');
    return redirect('/');
})->name('admin.logout');

// Admin dashboard 
Route::get('/admin/dashboard', function () {
    if (!session('is_admin')) abort(403);
    return view('admin.dashboard');
})->name('admin.dashboard');

// ---------------------- ADMIN EVENTS ----------------------

Route::middleware(['admin'])->prefix('admin')->group(function() {
    Route::get('/events/create', [EventsController::class, 'create'])->name('admin.events.create');

    Route::post('/events', [EventsController::class, 'store'])->name('admin.events.store');

    Route::get('/events/{event}/edit', [EventsController::class, 'edit'])->name('admin.events.edit');
    Route::put('/events/{event}', [EventsController::class, 'update'])->name('admin.events.update');

    Route::delete('/events/{event}', [EventsController::class, 'destroy'])->name('admin.events.destroy');
});

// ---------------------- PUBLIC PAGES ----------------------
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/events', [EventController::class, 'index'])->name('events');

Route::get('/contact', function () {
    return view('pages.contacts');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


