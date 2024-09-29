@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 text-xl font-bold text-blue-900  hover:underline'
            : 'inline-flex items-center px-1 pt-1 text-xl font-bold  hover:underline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
