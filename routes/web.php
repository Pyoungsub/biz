<?php

use App\Http\Controllers\SocialLoginController;
use Illuminate\Support\Facades\Route;
use App\Livewire;
use App\Http\Controllers\TossPaymentsController;
use App\Http\Middleware\IsAdmin;
Route::get('/', function () {
    //return view('welcome');
    return view('home');
});
Route::get('/login/{provider}', [SocialLoginController::class, 'redirect'])->name('social_login');
Route::get('/login/{provider}/callback', [SocialLoginController::class, 'callback']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/inquiries', Livewire\Inquiries::class)->name('inquiries');
    Route::get('payment/{id}', Livewire\Payment::class)->name('payment');
    Route::get('plans', Livewire\Plans::class)->name('plans');
    Route::middleware([IsAdmin::class])->group(function () {
        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/admin/sites', function () {
            return view('admin.sites');
        })->name('admin.sites');
        Route::get('/admin/plans', function () {
            return view('admin.plans');
        })->name('admin.plans');
        Route::get('/admin/inquiries', function () {
            return view('admin.inquiries');
        })->name('admin.inquiries');
    });
});

Route::get('/toss/success', [TossPaymentsController::class, 'success']);
Route::get('/toss/fail', [TossPaymentsController::class, 'fail']);