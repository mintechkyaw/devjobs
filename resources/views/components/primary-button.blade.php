<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-3 bg-blue-800
    sm:bg-indigo-800 md:bg-violet-800 lg:bg-purple-800 border
    border-transparent rounded-xl font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600
    hover:sm:bg-indigo-600 hover:md:bg-violet-600 hover:lg:bg-purple-600
    focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
