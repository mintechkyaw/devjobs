@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center justify-end px-1 pt-1 text-xl font-extrabold  hover:underline'
            : 'inline-flex items-center justify-end px-1 pt-1 text-xl font-extrabold  hover:underline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
