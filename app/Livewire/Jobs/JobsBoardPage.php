<?php

namespace App\Livewire\Jobs;

use App\Models\Job;
use App\Models\Skill;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class JobsBoardPage extends Component
{
    use WithPagination;

    #[Url(as: 'q', except: '')]
    public ?string $search = '';

    public ?string $skillSlug = '';

    public function mount($skill = null)
    {
        $this->skillSlug = $skill;
    }

    #[Computed()]
    public function skills()
    {
        return Skill::get();
    }

    #[Computed()]
    public function jobs()
    {
        if ($this->skillSlug) {
            return Job::latest()->whereHas('skills', function ($query) {
                $query->where('slug', $this->skillSlug);
            })
                ->where('job_title', 'like', "%{$this->search}%")
                ->with('skills')
                ->paginate(10);
        }

        return Job::latest()->where('job_title', 'like', "%{$this->search}%")
            ->with('skills')
            ->paginate(10);
    }

    public function render()
    {
        return view('jobs.jobs-board-page');
    }
}
