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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde ad dolores repudiandae placeat nemo quidem nihil
                distinctio,
                repellat architecto enim temporibus, est quo nesciunt ullam repellendus dolorum cum molestias voluptatum!
            </x-card.content>
        </x-card>
    </x-container>

</x-app-layout>
