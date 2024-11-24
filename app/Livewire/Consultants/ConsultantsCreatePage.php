<?php

namespace App\Livewire\Consultants;

use App\Livewire\Forms\CompanyForm;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
class ConsultantsCreatePage extends Component
{
    use WithFileUploads;

    public CompanyForm $form;

    public function save()
    {
        $this->form->postCompany();
    }

    public function render()
    {
        return view('consultants.consultant-create-page');
    }
}
