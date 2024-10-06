<?php

namespace App\Livewire\Forms;

use App\Models\Skill;
use Auth;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class JobForm extends Form
{
    #[Validate('required|string|max:255')]
    public string $job_title;

    #[Validate('required|string|max:255')]
    public string $job_location;

    #[Validate('required')]
    public array $job_skills;

    #[Validate('required|string|max:2550')]
    public string $job_description;

    #[Validate('required|string|in:office,hybrid,remote')]
    public string $job_type;

    #[Validate('required|string|in:full-time,part-time,contract,temporary,intern,volunteer,other')]
    public string $employ_type;

    #[Validate('required|string|max:255')]
    public string $company_name;

    #[Validate('required|string|max:255')]
    public string $salary;

    // #[Validate('required|string|max:255')]
    // public string $company_logo_path;

    #[Validate('required|boolean')]
    public bool $featured;

    public function postjob()
    {
        $this->validate();
        $job = Auth::user()->jobs()->create(
            $this->all()
        );
        $job->skills()->attach($this->job_skills);
        return redirect("jobs/$job->id");
    }
}
