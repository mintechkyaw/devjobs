<div class="md:px-2 lg:px-32 py-4 md:py-10 grid grid-cols-7 space-x-3">
    <div class="col-span-7 md:col-span-5">
        {{-- Job List --}}
        <div class="text-lg px-3 pb-2 md:hidden">
            <input type="text" wire:model.live='search' placeholder="search some jobs..."
                class="border-0  font-semibold placeholder:text-black placeholder:font-semibold shadow w-full rounded-lg ">
        </div>
        @forelse ($this->jobs as $job)
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
            {{-- <p class="">{{$job->job_description}}</p> --}}
        </x-job-wrapper>

        @empty
        <p class="text-center text-lg">currently no jobs with that... please stay updated for new jobs </p>
        @endforelse
        <div class="p-3">
            {{$this->jobs->links()}}
        </div>
    </div>
    <div class="col-span-2 hidden md:block">
        <div class="sticky top-5">
            <input type="text" wire:model.live='search' placeholder="search some jobs..."
                class="border-0  font-semibold placeholder:text-black placeholder:font-semibold shadow w-full rounded-lg ">
            <div class="mt-4">
                <x-skill-tag :active="request()->fullUrlIs('https://devjobs.test/jobs')" href="/" wire:navigate>
                    All Jobs
                </x-skill-tag>
                @foreach ($this->skills as $skill)
                <x-skill-tag active='{{request()->fullUrlIs("https://devjobs.test/$skill->slug")}}'
                    href="/{{ $skill->slug }}" wire:navigate>
                    {{ $skill->name }} Jobs
                </x-skill-tag>

                @endforeach
            </div>
        </div>
    </div>
</div>