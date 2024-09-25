<nav x-data="{ open: false }" class="pt-4">
    <!-- Primary Navigation Menu -->
    <div class=" mx-auto px-4 sm:px-6 lg:px-8">
        <div class="content-center h-16">
            <div class="flex justify-between md:justify-around">
                <!-- Logo -->
                <div class="shrink-0 flex justify-center items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo style="font-size: 42px"
                            class="inline w-auto text-blue-800 text-4xl font-bold" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 md:-my-px md:ms-10 md:flex">
                    <x-nav-link :href="route('jobs')" :active="request()->routeIs('jobs')" wire:navigate>
                        {{ __('Jobs') }}
                    </x-nav-link>
                    <x-nav-link :href="route('consultants')" :active="request()->routeIs('consultants')" wire:navigate>
                        {{ __('Consultants') }}
                    </x-nav-link>
                    <x-nav-link :href="route('account')" :active="request()->routeIs('account')" wire:navigate>
                        {{ __('Account') }}
                    </x-nav-link>
                    <button
                        class="text-xl font-bold text-white  hover:text-blue-300 bg-blue-600 px-5 py-3.5 rounded-xl">
                        Post A Job
                    </button>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center md:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex text-blue-900': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex text-blue-900': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block ': open, 'hidden': !open }" class="hidden md:hidden ">
            <div class="pt-2 pb-3 space-y-1 flex flex-col ">
                <x-responsive-nav-link :href="route('jobs')" class="text-center" :active="request()->routeIs('jobs')" wire:navigate>
                    {{ __('Jobs') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('consultants')" :active="request()->routeIs('consultants')" wire:navigate>
                    {{ __('Consultants') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('account')" :active="request()->routeIs('account')" wire:navigate>
                    {{ __('Account') }}
                </x-responsive-nav-link>
                <button
                    class="inline-flex items-center justify-end px-6 py-4 text-xl font-extrabold text-white active:text-blue-300 bg-blue-600 rounded-xl">
                    Post A Job
                </button>
            </div>
        </div>
    </div>
</nav>
