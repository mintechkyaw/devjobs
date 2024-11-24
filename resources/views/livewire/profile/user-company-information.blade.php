<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    #[Computed]
    public function consultant()
    {
        return Auth::user()->company;
    }

    #[Computed]
    public function jobs()
    {
        return Auth::user()->jobs;
    }
}; ?>

<section x-data="{ open: false }">
    <header class="flex justify-between">
        <h2 class="text-lg mb-5 font-medium text-gray-900">
            {{ __('Your Company') }}
        </h2>
        <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex text-blue-900': !open }" class="inline-flex"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'inline-flex text-blue-900': open }" class="hidden"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </header>
    @if (isset($this->consultant))
        <div :class="{ 'block ': open, 'hidden': !open }">
            <x-consultant-wrapper verified="{{ $this->consultant->verified }}">
                <img src="{{ $this->consultant->logo_path }}" alt=""
                    class="hidden sm:block absolute rounded-lg border shadow-lg border-blue-100 h-24 w-24 left-4 -top-9 ">
                <a href="{{ $this->consultant->website }}"
                    class="block sm:ms-28 text-2xl sm:text-xl text-start font-semibold p-4 pb-1">
                    {{ $this->consultant->name }}
                    @if ($this->consultant->verified)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="inline h-5 w-5 text-blue-500">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                clip-rule="evenodd" />
                        </svg>
                    @endif
                </a>
                <div class="ms-2 mt-6 flex flex-col lg:flex-row justify-around">
                    <div class="inline-flex space-x-1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                        </svg>
                        <span>
                            {{ $this->consultant->type }}
                        </span>
                    </div>
                    <div class="inline-flex space-x-1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                        <span>
                            {{ $this->consultant->location }}
                        </span>
                    </div>
                    <div class="inline-flex space-x-1 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                        <span>
                            {{ $this->consultant->email }}
                        </span>
                    </div>
                </div>
                <div class="m-2">
                    {!! str($this->consultant->about)->sanitizeHtml() !!}
                </div>
            </x-consultant-wrapper>
        </div>
    @else
        <p class="text-lg">You don't have Company.. <a href="{{route('consultants.create')}}" wire:navigate class="underline text-blue-700">Upload One</a> and you will see the magic! </p>
    @endif
</section>
