<?php

use Illuminate\Support\Facades\Route;
use App\Livewire;
Route::get('/', function () {
    //return view('welcome');
    return view('home');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/inquiries', Livewire\Inquiries::class)->name('inquiries');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
