<?php

namespace App\Livewire\Jobs;

use App\Http\Resources\JobResource;
use App\Models\Job;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class JobPage extends Component
{
    public $job_id;
    public function mount($job)
    {
        $this->job_id = $job;
    }

    #[Computed()]
    public function job()
    {
        return Job::with('skills')->findOrFail($this->job_id);
    }

    public function render()
    {
        return view('livewire.jobs.job-page');
    }
}
