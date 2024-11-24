<?php

namespace App\Livewire\Jobs;

use App\Livewire\Forms\JobForm;
use App\Models\Skill;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class JobCreatePage extends Component
{
    use WithFileUploads;

    public JobForm $form;

    public function save()
    {
        $this->form->postjob();
    }

    #[Computed()]
    public function skills()
    {
        return Skill::select('id', 'name')->get()->toArray();
    }

    public function render()
    {
        return view('jobs.job-create-page');
    }
}
