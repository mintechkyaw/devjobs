<?php

use App\Livewire\Consultants\ConsultantsBoardPage;
use App\Livewire\Jobs\JobCreatePage;
use App\Livewire\Jobs\JobsBoardPage;
use App\Livewire\Jobs\JobShowPage;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

Route::redirect('/', '/jobs');

Route::get('/jobs', JobsBoardPage::class)->name('jobs');

Route::get('/jobs/create', JobCreatePage::class)->middleware('auth')->name('jobs.create');
Route::get('/jobs/{job}', JobShowPage::class)->name('jobs.show');

Route::get('/consultants', ConsultantsBoardPage::class)->name('consultants');

Route::view('account', 'profile')
    ->middleware(['auth'])
    ->name('account');

Route::get('/{skill?}', JobsBoardPage::class);
