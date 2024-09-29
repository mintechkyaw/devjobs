<?php

namespace App\Livewire\Consultants;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ConsultantsBoardPage extends Component
{
    public function render()
    {
        return view('consultants.consultants-board-page');
    }
}
