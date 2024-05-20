@use('App\Enums\StoreStatus')
<x-card class="flex flex-col">

    <div class="p-6 pb-0">
        <a href="{{ route('stores.show', $store) }}">
            @if ($store->logo)
                <img src="{{ Storage::url($store->logo) }}" alt="{{ $store->name }}" class="size-12 rounded-lg" />
            @else
                <div class="size-16 rounded-lg bg-zinc-700"></div>
            @endif
        </a>
    </div>
    <div class="flex-1">
        <x-card.header>
            <x-card.title> {{ str($store->name)->limit(50) }} </x-card.title>
            <p class="text-xs text-zinc-500">
                Created at : {{ $store->created_at->format('d-m-Y') }}
                @if (!request()->routeIs('stores.mine'))
                    by {{ $store->user->name }}
                @endif
            </p>
        </x-card.header>
        <x-card.content>
            <section>
                <p class="mb-2">
                    {{ str($store->description)->limit(150) }}
                </p>
                <p class="text-zinc-400 text-sm">
                    {{ $store->products_count }} {{ str('products')->plural($store->products_count) }}
                </p>
            </section>
        </x-card.content>
    </div>

    <x-card.footer class="flex items-center justify-between">
        <x-badge>{{ $store->status }}</x-badge>
        @if (isset($isAdmin))
            @if ($store->status === StoreStatus::PENDING)
                <x-primary-button x-data=""
                    x-on:click.prevent="$dispatch('open-modal', `modal-{{ $store->id }}`)">{{ __('Approve') }}
                </x-primary-button>
                <x-modal name="modal-{{ $store->id }}" :show="$errors->userDeletion->isNotEmpty()" focusable>
                    <form method="post" action="{{ route('stores.approve', $store) }}" class="p-6">
                        @csrf
                        @method('PUT')

                        <h2 class="text-lg font-medium text-zinc-900">
                            {{ $store->name }}
                        </h2>

                        <p class="mt-1 text-sm text-zinc-600">
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
        @endif
    </x-card.footer>
</x-card>
