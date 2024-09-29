<?php

namespace App\Livewire\Jobs;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class JobCreatePage extends Component
{
    public function render()
    {
        
        return view('jobs.job-create-page');
    }
}
