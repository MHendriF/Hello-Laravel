<x-app-layout title="Create User">
    <x-slot name="heading">
        Create User
    </x-slot>
    <form action="/users" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="border px-4 py-2 rounded block mt-1">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="border px-4 py-2 rounded block mt-1">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="border px-4 py-2 rounded block mt-1">
        </div>
        <x-button>
            Submit
        </x-button>
    </form>
</x-app-layout>
