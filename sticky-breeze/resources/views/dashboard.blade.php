<x-app-layout>
    @slot('title', 'Dashboard')
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-container class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-card class="p-6">
            {{ __("You're logged in!") }}
        </x-card>
    </x-container>
</x-app-layout>
