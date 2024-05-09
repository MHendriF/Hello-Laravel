@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-zinc-800 bg-zinc-950 text-white focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm',
]) !!}>
