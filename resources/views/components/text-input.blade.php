@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-blue-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-xl shadow-sm']) !!}>
