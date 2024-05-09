@use('App\Enums\StoreStatus')

<x-app-layout>
    @slot('title', 'List Stores')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Stores') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="grid grid-cols-3 gap-6">
            @foreach ($stores as $store)
                <x-card class="pb-3">
                    <div class="p-6 pb-0">
                        <img src="{{ Storage::url($store->logo) }}" alt="{{ $store->name }}" class="size-12 rounded-lg" />
                    </div>
                    <x-card.header>
                        <x-card.title> {{ $store->name }} </x-card.title>
                        <p class="mt-1 text-xs text-gray-500">
                            Created at : {{ $store->created_at->format('d-m-Y') }} by {{ $store->user->name }}
                        </p>
                    </x-card.header>
                    <x-card.content>
                        <section class="space-y-6">
                            <header>
                                <x-card.description>
                                    {{ $store->description }}
                                </x-card.description>
                            </header>

                            @if ($store->status === StoreStatus::PENDING)
                                <x-primary-button x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', `modal-{{ $store->id }}`)">{{ __('Approve') }}
                                </x-primary-button>
                                <x-modal name="modal-{{ $store->id }}" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                    <form method="post" action="{{ route('stores.approve', $store) }}" class="p-6">
                                        @csrf
                                        @method('PUT')

                                        <h2 class="text-lg font-medium text-gray-900">
                                            {{ $store->name }}
                                        </h2>

                                        <p class="mt-1 text-sm text-gray-600">
                                            {{ $store->description }}
                                        </p>

                                        <div class="mt-6 flex justify-end">
                                            <x-secondary-button x-on:click="$dispatch('close')">
                                                {{ __('Cancel') }}
                                            </x-secondary-button>

                                            <x-primary-button class="ms-3">
                                                {{ __('Approve') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </x-modal>
                            @endif
                        </section>

                    </x-card.content>
                </x-card>
            @endforeach
        </div>

    </x-container>
</x-app-layout>
