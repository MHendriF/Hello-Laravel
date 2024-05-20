<x-app-layout>
    @slot('title', $store->name)
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ $store->name }}
        </h2>
    </x-slot>

    <x-container>
        <div class="grid grid-cols-4 gap-4">
            @foreach ($products as $product)
                <x-card class="relative">
                    <a href="{{ route('products.show', [$store, $product]) }}" class="absolute size-full inset-0"></a>
                    <x-card.header>
                        <x-card.title> {{ $product->name }} </x-card.title>
                        <x-card.description>
                            {{ Number::currency($product->price, 'IDR') }}
                        </x-card.description>
                    </x-card.header>
                </x-card>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $products->links() }}
        </div>

    </x-container>

</x-app-layout>
