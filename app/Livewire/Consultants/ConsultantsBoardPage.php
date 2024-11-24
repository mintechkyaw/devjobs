<?php

namespace App\Livewire\Consultants;

use App\Models\Company;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class ConsultantsBoardPage extends Component
{
    use WithPagination;

    #[Computed()]
    public function consultants()
    {
        return Company::latest()->paginate(10);
    }

    public function render()
    {
        return view('consultants.consultants-board-page');
    }
}
