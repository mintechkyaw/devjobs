<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;
use Livewire\Volt\Component;

new class extends Component
{
    public string $password = '';

    /**
     * Delete the currently authenticated user.
     */
    public function logoutUser(Logout $logout): void
    {

        tap(Auth::user(), $logout(...));

        $this->redirect('/', navigate: true);
    }
}; ?>

<section class="space-y-6" >
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Logout Account') }}
        </h2>
    </header>

    <x-danger-button
       wire:click='logoutUser'
    >{{ __('Logout Account') }}</x-danger-button>

</section>
