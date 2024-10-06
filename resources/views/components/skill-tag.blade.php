@props(['active'])

@php
$classes =
$active ?? false
? 'inline-block bg-blue-400 sm:bg-indigo-400 md:bg-violet-400 lg:bg-purple-400 hover:bg-blue-800 hover:sm:bg-indigo-800
hover:md:bg-violet-800 hover:lg:bg-purple-800 text-black hover:text-blue-900 px-2 py-1.5 rounded-lg text-blue-900
font-bold mt-2'
: 'inline-block bg-blue-800 sm:bg-indigo-800 md:bg-violet-800 lg:bg-purple-800 hover:bg-blue-400 hover:sm:bg-indigo-400
hover:md:bg-violet-400 hover:lg:bg-purple-400 text-white hover:bg-blue-600 text-white bg-blue-600 px-2 py-1.5 rounded-lg
hover:text-blue-900 font-bold mt-2';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>