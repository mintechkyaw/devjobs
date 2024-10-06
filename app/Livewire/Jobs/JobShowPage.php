<?php

namespace App\Livewire\Jobs;

use App\Models\Job;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class JobShowPage extends Component
{
    protected $job_id;

    public function mount($job)
    {
        $this->job_id = $job;
    }

    #[Computed()]
    public function job()
    {
        return Job::findOrFail($this->job_id);
    }

    public function render()
    {
        return view('jobs.job-show-page');
    }
}
