@props(['verified'])

@php
    $classes =
        $verified ?? false
            ? 'relative shadow-lg border-0 bg-blue-800 sm:bg-indigo-800 md:bg-violet-800 lg:bg-purple-800 font-medium text-slate-50 rounded-lg sm:mt-12 mx-3 sm:mx-0 mb-3'
            : 'relative border-2 border-blue-800 sm:border-indigo-800 md:border-violet-800 lg:border-purple-800 font-medium rounded-lg md:mt-12 mx-3 sm:mx-0 mb-3';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
