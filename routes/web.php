<?php

use App\Livewire\Jobs\JobCreatePage;
use App\Livewire\Jobs\JobShowPage;
use App\Livewire\Jobs\JobsBoardPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Consultants\ConsultantsBoardPage;

require __DIR__ . '/auth.php';

Route::redirect('/', '/jobs');

Route::get('/jobs', JobsBoardPage::class)->name('jobs');
Route::get('/{skill?}', JobsBoardPage::class);

Route::get('/jobs/create', JobCreatePage::class)->name('jobs.create');
Route::get('/jobs/{job}', JobShowPage::class)->name('jobs.show');

Route::get('/consultants', ConsultantsBoardPage::class)->name('consultants');

Route::view('account', 'profile')
    ->middleware(['auth'])
    ->name('account');
