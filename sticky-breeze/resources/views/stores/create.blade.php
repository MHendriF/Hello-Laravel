<x-app-layout>
    @slot('title', 'Create a store')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a store') }}
        </h2>
    </x-slot>
    <x-container>
        <x-card class="max-w-2xl">
            <x-card.header>
                <x-card.title>
                    Create new store
                </x-card.title>
                <x-card.description>
                    You can create up to 5 stores.
                </x-card.description>
            </x-card.header>
            <x-card.content>
                <form action="{{ route('stores.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6" novalidate>
                    @csrf
                    <div>
                        <x-input-label for="logo" :value="__('Logo')" class="sr-only" />
                        <input id="logo" type="file" name="logo" required />
                        <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="description" :value="__('Description')" />
                        <x-textarea id="description" class="block mt-1 w-full" type="text" name="description"
                            required>{{ old('description') }}</x-textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>
                    <x-primary-button>
                        Create
                    </x-primary-button>
                </form>
            </x-card.content>
        </x-card>
    </x-container>

</x-app-layout>
