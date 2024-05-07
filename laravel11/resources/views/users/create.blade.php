<x-app-layout title="Create User">
    <x-slot name="heading">
        Create User
    </x-slot>
    <form action="/users" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border px-4 py-2 rounded block mt-1">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="border px-4 py-2 rounded block mt-1">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="border px-4 py-2 rounded block mt-1">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>
        <x-button>
            Submit
        </x-button>
    </form>
</x-app-layout>
