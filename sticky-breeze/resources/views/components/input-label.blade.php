@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-zinc-300']) }}>
    {{ $value ?? $slot }}
</label>
