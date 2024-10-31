<?php

namespace App\Livewire\Consultants;

use App\Models\Company;
use App\Models\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class ConsultantsBoardPage extends Component
{
    use WithPagination;

    #[Computed()]
    public function consultants()
    {
        return Company::latest()->with('services')->paginate(10);
    }

    public function render()
    {
        return view('consultants.consultants-board-page');
    }
}
