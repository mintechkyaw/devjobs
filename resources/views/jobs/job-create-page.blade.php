<div class="py-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form wire:submit="save" class="mt-6 space-y-6">
                    <div>
                        <x-input-label for="job_title" :value="__('Job Title')" />
                        <x-text-input wire:model="form.job_title" id="job_title" name="job_title" type="text"
                            class="mt-1 block w-full" required autofocus="form.job_title" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.job_title')" />
                    </div>
                    <div>
                        <x-input-label for="job_location" :value="__('Job Location')" />
                        <x-text-input wire:model="form.job_location" id="job_location" name="job_location"
                            type="text" class="mt-1 block w-full" required autofocus="form.job_location" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.job_location')" />
                    </div>
                    <div>
                        <x-input-label for="job_skills" :value="__('Job Skills')" />
                        <x-select class="hover:text-black"
                         id="job_skills" placeholder="Select required skills" multiselect :options="$this->skills"
                            wire:model='form.job_skills' option-label="name" option-value="id" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.job_skills')" />
                    </div>
                    <div>
                        <x-input-label for="job_description" :value="__('Job Description')" />
                        <textarea wire:model="form.job_description" id="job_description" name="job_description" type="text"
                            class="border-blue-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm mt-1 block w-full"
                            required autofocus
                           ="form.job_description"></textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('form.job_description')" />
                    </div>
                    <div>
                        <x-input-label for="company_name" :value="__('Company Name')" />
                        <x-text-input wire:model="form.company_name" id="company_name" name="company_name"
                            type="text" class="mt-1 block w-full" required autofocus="form.company_name" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.company_name')" />
                    </div>
                    <div>
                        <x-input-label for="salary" :value="__('Salary')" />
                        <x-text-input wire:model="form.salary" id="salary" name="salary" type="text"
                            class="mt-1 block w-full" required autofocus="form.salary" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.salary')" />
                    </div>
                    <div>
                        <x-input-label :value="__('Job Type')" />
                        @php 
                            $job_types = ['office', 'hybrid', 'remote'];
                        @endphp
                        @foreach ($job_types as $job_type)
                            <x-input-label for="{{ $job_type }}"
                                class="inline-flex justify-center space-x-1 pe-2 items-center capitalize text-base">
                                <input type="radio" name="jobtype" id="{{ $job_type }}"
                                    value="{{ $job_type }}" wire:model='form.job_type'>
                                <span>{{ $job_type }}</span>
                            </x-input-label>
                        @endforeach
                        <x-input-error class="mt-2" :messages="$errors->get('form.job_type')" />
                    </div>
                    <div class="space-y-1.5">
                        <x-input-label :value="__('Employ Type')" />
                        @php
                            $employ_types = [
                                'full-time',
                                'part-time',
                                'contract',
                                'temporary',
                                'intern',
                                'volunteer',
                                'other',
                            ];
                        @endphp
                        @foreach ($employ_types as $employ_type)
                            <x-input-label for="{{ $employ_type }}" class="capitalize text-base">
                                <input type="radio" name="employtype" id="{{ $employ_type }}"
                                    value="{{ $employ_type }}" wire:model='form.employ_type'>
                                {{ $employ_type }}
                            </x-input-label>
                        @endforeach
                        <x-input-error class="mt-2" :messages="$errors->get('form.employ_type')" />
                    </div>
                    <div>

                        <x-input-label for="logo" :value="__('Company Logo')" />
                        @if (isset($form->company_logo_path))
                            <img src="{{ $form->company_logo_path->temporaryUrl() }}" alt=""
                                class="hidden sm:block  rounded-lg border shadow-lg border-blue-100 h-24 w-24 left-4 -top-9 mb-1 ">
                        @endif
                        <input type="file" wire:model="form.company_logo_path" name="logo" id="logo"
                            autofocus="form.company_logo_path"
                            class="border-blue-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm mt-1 block w-full file:bg-blue-100 file:border-0 file:py-2 file:px-4 file:rounded-lg file:text-blue-700 file:hover:bg-blue-200">
                        <x-input-error class="mt-2" :messages="$errors->get('form.company_logo_path')" />
                    </div>
                    <div class="flex space-x-2 content-center">
                        <x-input-label for="featured" :value="__('Featured')" />
                        <input @checked(true) type="checkbox" wire:model='form.featured' id="featured"
                            class="border-blue-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm">

                    </div>
                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        <x-action-message class="me-3" on="profile-updated">
                            {{ __('Saved.') }}
                        </x-action-message>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
