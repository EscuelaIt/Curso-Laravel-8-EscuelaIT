<x-guest-layout>
    @include('layouts.navigation')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-700 border-b border-gray-800">
                    <h1 class="text-red-500">
                        En mantenimiento
                    </h1>
                    <p class="font-bold text-red-700">
                        {{ $exception->getMessage() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
