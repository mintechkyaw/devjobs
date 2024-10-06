<div class="py-10">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-4xl">
                <div class="mt-6 space-y-6">
                    <div>
                        <x-input-label for="job_title" :value="__('Job Title')" />
                        <x-text-input :disabled="true" value="{{ $this->job->job_title }}" id="job_title" name="job_title"
                            type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <x-input-label for="job_location" :value="__('Job Location / Job Type / Employ Type')" />
                        <x-text-input :disabled="true"
                            value="{{ $this->job->job_location }} / {{ $this->job->job_type }} / {{$this->job->employ_type}}" id="job_location"
                            name="job_location" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <x-input-label for="job_skills" :value="__('Job Skills')" />
                        @foreach ($this->job->skills as $skill)
                            <x-skill-tag>{{ $skill->name }}</x-skill-tag>
                        @endforeach
                    </div>

                    <div>
                        <x-input-label for="company_name" :value="__('Company Name')" />
                        <x-text-input :disabled="true" value="{{ $this->job->company_name }}" id="company_name"
                            name="company_name" type="text" class="mt-1 block w-full" />
                    </div>
                    <div>
                        <x-input-label for="salary" :value="__('Salary')" />
                        <x-text-input :disabled="true" value="{{ $this->job->salary }}" id="salary" name="salary"
                            type="text" class="mt-1 block w-full" />

                    </div>
                    <div>
                        <x-input-label for="job_description" :value="__('Job Description')" />
                        <p>
                            {{ $this->job->job_description }}
                        </p>
                    </div>
                    {{-- <div class="space-y-1.5">
                        <x-input-label :value="__('Employ Type')" />

                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
