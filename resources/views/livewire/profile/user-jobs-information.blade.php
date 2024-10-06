<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Computed;

new class extends Component {
    
    #[Computed()]
    public function jobs() {
        return Auth::user()->jobs;
    }
}; ?>

<section x-data="{open:false}">
    <header class="flex justify-between">
        <h2 class="text-lg mb-5 font-medium text-gray-900">
            {{ __('Your Posted Jobs') }}
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
    @forelse ($this->jobs as $job)
    <div :class="{ 'block ': open, 'hidden': !open }">
        <x-job-wrapper featured="{{$job->featured}}" href="/jobs/{{ $job->id }}" wire:navigate>
            <img src="{{ asset('images/minthantkyaw.png') }}" alt="minthantkyawphoto"
                class="hidden md:block absolute rounded-lg border shadow-lg border-blue-100 h-24 w-24 -left-16">
            <div class="">
                <div class="text-md font-light">{{ $job->company_name }}</div>
                <div class="text-xl font-semibold">{{ $job->job_title }}</div>
                <div class="text-md font-normwal">{{ $job->employ_type }}</div>
                <div class="text-md font-extralight">{{ $job->salary }}</div>
            </div>
            <div class="sm:text-end grid my-auto">
                <div class="text-md font-light capitalize">
                    {{ $job->job_location . ' / ' . $job->job_type }}
                </div>
                <div class="text-md font-normal">{{ $job->created_at->diffForHumans(null, true, true) }}
                </div>
                <div>
                    @foreach ($job->skills as $skill)
                    <x-skill-tag :active="true" href="/{{ $skill->slug }}" wire:navigate>
                        {{ $skill->name }}
                    </x-skill-tag>
                    @endforeach
                </div>
            </div>
        </x-job-wrapper>
    </div>
    @empty
    <p class="text-lg">You haven't post any jobs.. Post one and you will see the magic! </p>
    @endforelse
</section>