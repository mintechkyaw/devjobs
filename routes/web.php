<?php

use App\Livewire\Consultants\ConsultantsBoardPage;
use App\Livewire\Dashboard;
use App\Livewire\Jobs\JobPage;
use App\Livewire\Jobs\JobsBoardPage;
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/jobs', JobsBoardPage::class)->name('jobs');

Route::get('/skill_jobs/{skill?}', JobsBoardPage::class);

Route::get('/jobs/{job}', JobPage::class);

Route::get('/consultants', ConsultantsBoardPage::class)->name('consultants');

Route::view('account', 'profile')
    ->middleware(['auth'])
    ->name('account');

require __DIR__ . '/auth.php';
