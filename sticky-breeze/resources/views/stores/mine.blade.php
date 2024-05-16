@use('App\Enums\StoreStatus')

<x-app-layout>
    @slot('title', 'My Store')
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('My Store') }}
        </h2>
    </x-slot>

    <x-container class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if ($stores->count())
            <div class="grid grid-cols-4 gap-6">
                @foreach ($stores as $store)
                    <x-stores.item :$store />
                @endforeach
            </div>
        @else
            <p class="text-zinc-400">
                You haven't make any store yet.
            </p>
        @endif
    </x-container>
</x-app-layout>
