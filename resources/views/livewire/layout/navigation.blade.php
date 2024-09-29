<nav x-data="{ open: false }" class="pt-2">
    <!-- Primary Navigation Menu -->
    <div class=" mx-auto px-4 sm:px-6 lg:px-8">
        <div class="content-center h-16">
            <div class="flex justify-between md:justify-around">
                <!-- Logo -->
                <div class="shrink-0 flex justify-center items-center">
                    <a href="/" wire:navigate>
                        <x-application-logo />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class=" hidden space-x-4 md:-my-px md:ms-10 md:flex">
                    <x-nav-link :href="route('jobs')" :active="request()->routeIs('jobs')" wire:navigate>
                        {{ __('Jobs') }}
                    </x-nav-link>
                    <x-nav-link :href="route('consultants')" :active="request()->routeIs('consultants')" wire:navigate>
                        {{ __('Consultants') }}
                    </x-nav-link>
                    @auth
                    <x-nav-link :href="route('account')" :active="request()->routeIs('account')" wire:navigate>
                        {{ __('Account') }}
                    </x-nav-link>
                    @else
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')" wire:navigate>
                        {{ __('Login') }}
                    </x-nav-link>
                    @endauth
                    <a href="{{ route('jobs.create') }}" 
                        class="px-5 py-3.5 rounded-xl text-xl font-bold text-white  hover:text-blue-950 
                                 bg-blue-800 sm:bg-indigo-800 md:bg-violet-800 lg:bg-purple-800
                                 hover:bg-blue-400 hover:sm:bg-indigo-400 hover:md:bg-violet-400 hover:lg:bg-purple-400">
                        {{ __('Post a Job') }}
                    </a>

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
                <x-responsive-nav-link :href="route('jobs')" class="text-center" :active="request()->routeIs('jobs')"
                    wire:navigate>
                    {{ __('Jobs') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('consultants')" :active="request()->routeIs('consultants')"
                    wire:navigate>
                    {{ __('Consultants') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('account')" :active="request()->routeIs('account')" wire:navigate>
                    {{ __('Account') }}
                </x-responsive-nav-link>
                <a :href="route('jobs.create')" wire:navigate
                    class="inline-flex items-center justify-end px-6 py-4 mt-2 text-xl font-extrabold text-white active:text-blue-950 active:bg-blue-400 bg-blue-600 rounded-xl">
                    {{ __('Post a Job') }}
                </a>
            </div>
        </div>
    </div>
</nav>