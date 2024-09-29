@props(['featured'])

@php
$classes =
$featured ?? false
? 'relative bg-blue-500 text-slate-50 shadow-lg mx-3 mb-3  p-3 md:ps-10 border border-blue-100  rounded-lg flex justify-between flex-col sm:flex-row'
: 'relative  shadow-lg mx-3 mb-3  p-3 md:ps-10 border border-blue-100  rounded-lg flex justify-between flex-col sm:flex-row';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>