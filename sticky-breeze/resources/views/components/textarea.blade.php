@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'w-full border-zinc-800 bg-zinc-950 focus:border-blue-500 focus:ring-blue-500 rounded-md shadow-sm',
]) !!}>{{ $slot }}</textarea>
