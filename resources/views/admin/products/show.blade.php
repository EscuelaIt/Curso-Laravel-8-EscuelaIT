<x-base>
    <h1>Welcome to the products view</h1>

    <a href="{{ route('products.create') }}">Crear Producto</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
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

</x-base>
