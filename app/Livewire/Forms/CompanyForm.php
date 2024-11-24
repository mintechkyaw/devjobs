<?php

namespace App\Livewire\Forms;

use Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CompanyForm extends Form
{
    #[Validate('required|string|max:255')]
    public string $name;

    #[Validate('required|string|email')]
    public string $email;

    #[Validate('required|string|max:255')]
    public string $location;

    #[Validate('required|url')]
    public string $website;

    #[Validate('required|string|in:Freelance,IT Solution,Agency')]
    public string $type;

    #[Validate('required|image|mimes:jpg,jpeg,png,webp')]
    public mixed $logo_path;

    #[Validate('required|string|max:2550')]
    public string $about;

    public function postCompany()
    {

        $this->validate();
        $this->logo_path = $this->logo_path->store('company_photos', 'public');
        Auth::user()->company()->create($this->all());

        return to_route('consultants');
    }
}
