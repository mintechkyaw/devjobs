@props(['active' => false])

@php
    $baseClasses = 'inline-block px-2 py-1.5 rounded-lg font-bold mt-2 sm:bg-indigo-800 md:bg-violet-800 lg:bg-purple-800 hover:sm:bg-indigo-800 hover:md:bg-violet-800 hover:lg:bg-purple-800';
    $activeClasses = 'bg-blue-800 text-black hover:text-blue-900';
    $inactiveClasses = 'bg-blue-600 text-white hover:bg-blue-800 hover:text-blue-900';

    $classes = $baseClasses . ' ' . ($active ? $activeClasses : $inactiveClasses);
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
