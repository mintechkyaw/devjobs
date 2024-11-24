<div class="py-10">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form wire:submit="save" class="mt-6 space-y-6">
                    <div>
                        <x-input-label for="company_name" :value="__('Company Name')" />
                        <x-text-input wire:model="form.name" id="company_name" name="company_name" type="text"
                            class="mt-1 block w-full" required autofocus="form.name" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.name')" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Company Email')" />
                        <x-text-input wire:model="form.email" id="email" name="email" type="email"
                            class="mt-1 block w-full" required autofocus="form.email" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.email')" />
                    </div>
                    <div>
                        <x-input-label for="location" :value="__('Company Location')" />
                        <x-text-input wire:model="form.location" id="location" name="location" type="text"
                            class="mt-1 block w-full" required autofocus="form.location" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.location')" />
                    </div>
                    <div>
                        <x-input-label for="company_website" :value="__('Company Website')" />
                        <x-text-input wire:model="form.website" id="company_website" name="company_website"
                            type="url" class="mt-1 block w-full" required autofocus="form.website" />
                        <x-input-error class="mt-2" :messages="$errors->get('form.website')" />
                    </div>
                    <div>
                        <x-input-label :value="__('Company Type')" />
                        @php
                            $company_types = ['Freelance', 'IT Solution', 'Agency'];
                        @endphp
                        @foreach ($company_types as $type)
                            <x-input-label for="{{ $type }}"
                                class="inline-flex justify-center space-x-1 pe-2 items-center capitalize text-base">
                                <input type="radio" name="companytype" id="{{ $type }}"
                                    value="{{ $type }}" wire:model='form.type'>
                                <span>{{ $type }}</span>
                            </x-input-label>
                        @endforeach
                        <x-input-error class="mt-2" :messages="$errors->get('form.type')" />
                    </div>
                    <div>
                        <x-input-label for="about" :value="__('About Company')" />
                        <textarea name="about" id="about" wire:model="form.about" required autofocus="form.about"
                            class="border-blue-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm mt-1 block w-full"></textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('form.about')" />
                    </div>
                    <div>

                        <x-input-label for="logo" :value="__('Company Logo')" />
                        @if (isset($form->logo_path))
                            <img src="{{ $form->logo_path->temporaryUrl() }}" alt=""
                                class="hidden sm:block  rounded-lg border shadow-lg border-blue-100 h-24 w-24 left-4 -top-9 mb-1 ">
                        @endif
                        <input type="file" wire:model="form.logo_path" name="logo" id="logo"
                            autofocus="form.logo_path"
                            class="border-blue-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm mt-1 block w-full file:bg-blue-100 file:border-0 file:py-2 file:px-4 file:rounded-lg file:text-blue-700 file:hover:bg-blue-200">
                        <x-input-error class="mt-2" :messages="$errors->get('form.logo_path')" />
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
