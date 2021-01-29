<x-app-layout>
    <div class="py-12">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold text-indigo-600 mb-5">
                Welcome to the products view
            </h1>

            <a
                class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"
                href="{{ route('products.create') }}"
            >
                Crear Producto
            </a>

            <table class="mt-12">
                <thead class="border border-solid bottom-4">
                    <tr>
                        <th>Slug</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $product->slug }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}">
                                Editar
                            </a>
                            <form
                                action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
