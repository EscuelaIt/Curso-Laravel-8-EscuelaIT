<x-app-layout>
    <h1>Welcome to the products view</h1>

    <a href="{{ route('products.create') }}">Crear Producto</a>

    @if ($products->isEmpty())
        <p>No hay productos para mostrar. Crea uno.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a
                                href="{{ route('products.show', ['product' => $product->id]) }}"
                            >
                                Mostrar
                            </a>
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
                @endforeach
            </tbody>
        </table>
    @endif

</x-app-layout>
