<?php

use App\Events\SendNotif;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get("test-broadtast", function () {
        return SendNotif::dispatch("Hello", "World");
    })->name("broadcast");
});
