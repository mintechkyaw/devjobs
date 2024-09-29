@props(['active'])

@php
$classes =
$active ?? false
? 'inline-flex items-center px-1 pt-1 text-xl font-bold text-blue-800 sm:text-indigo-800 md:text-violet-800
lg:text-purple-800
hover:underline'
: 'inline-flex items-center px-1 pt-1 text-xl font-bold hover:underline';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>