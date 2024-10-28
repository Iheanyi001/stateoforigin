<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{FrontController, DashboardController, RequestController, CertificateController};

Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');

Route::get('certificate/download/{id}', [CertificateController::class, 'index'])->name(
    'certificate.download');

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

    Route::get('payment', function(){
        return view('payment');
    })->name('payment');

    Route::get('application/request/view/{id}', [RequestController::class, 'request_view'])->name('application.request.view');

    /*Route::get('admin/login', function(){
        return view('admin.login');
    })->name('admin.login');

    Route::post('admin/login', function(){
        return redirect(route('admin.dashboard'));
    })->name('admin.login');
    */


    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        'role:Admin',
    ])->prefix('admin')->group(function () {
        Route::get('dashboard', function(){
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('applications', function(){
            return view('admin.application.view');
        })->name('admin.application.view');

    });

});
