<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontController, DashboardController};

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/convert/certificate', function(){
        return view('convert_certificate');
    })->name('convert.certificate');
    Route::get('request/certificate', function(){
        return view('request_certificate');
    })->name('request.certificate');
    Route::get('request/certificate/child', function(){
        return view('request_certificate_child');
    })->name('request.certificate.child');
    Route::get('view/application', function(){
        return view('application_view');
    })->name('application.view');
});
