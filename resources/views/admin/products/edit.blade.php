<x-app-layout>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>


        <h1>Welcome to the products view</h1>

        <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mt-4">
                <x-label for="slug" :value="__('Slug')" />

                <x-input id="slug"
                    class="block mt-1 w-full"
                    type="text"
                    name="slug"
                    value="{{ old('slug') ?? $product->slug }}"
                    required
                    autocomplete="current-slug" />
            </div>
            <div class="mt-4">
                <x-label for="title" :value="__('Title')" />

                <x-input id="title"
                    class="block mt-1 w-full"
                    type="text"
                    name="title"
                    value="{{ old('title') ?? $product->title }}"
                    required
                    autocomplete="current-title" />
            </div>

            <div class="mt-4">
                <x-label for="price" :value="__('Price')" />

                <x-input
                    id="price"
                    class="block mt-1 w-full"
                    type="number"
                    min="1"
                    max="1000"
                    name="price"
                    value="{{ old('price') ?? $product->price }}"
                    required
                    autocomplete="current-price" />
            </div>

            <x-button class="mt-5">
                {{ __('Actualizar Producto') }}
            </x-button>
        </form>
    </x-auth-card>
</x-app-layout>
