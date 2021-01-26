<x-app-layout>

    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>


        <h1>Welcome to the products view</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mt-4">
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full"
                                type="text"
                                name="title"
                                required autocomplete="current-title" />
            </div>

            <div class="mt-4">
                <x-label for="price" :value="__('Price')" />

                <x-input id="price" class="block mt-1 w-full"
                                type="number"
                                min="1"
                                max="100"
                                name="price"
                                required autocomplete="current-price" />
            </div>

            <x-button class="mt-5">
                {{ __('Crear Producto') }}
            </x-button>
        </form>
    </x-auth-card>
</x-app-layout>
