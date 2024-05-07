<x-app-layout title="Users">
    <x-slot name="heading">
        {{ $user->name }}
    </x-slot>
    <div>{{ $user->email }}</div>
    <div>{{ $user->created_at->format('d M Y') }}</div>

    <form action="/users/{{ $user->id }}" method="post" class="mt-6">
        @method('DELETE')
        @csrf
        <x-button type="submit">Delete</x-button>
    </form>
</x-app-layout>
