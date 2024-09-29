@props(['active'])

@php
$classes =
$active ?? false
? 'inline-block bg-blue-200 hover:text-white hover:bg-blue-600 px-2 py-1.5 rounded-lg text-blue-900 font-bold mt-2'
: 'inline-block hover:bg-blue-200 text-white bg-blue-600 px-2 py-1.5 rounded-lg hover:text-blue-900 font-bold mt-2';
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>