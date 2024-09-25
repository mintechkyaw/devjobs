<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('dashboard');

Route::view('jobs', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('jobs');
Route::view('consultants', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('consultants');
Route::view('account', 'profile')
    ->middleware(['auth'])
    ->name('account');

require __DIR__ . '/auth.php';

