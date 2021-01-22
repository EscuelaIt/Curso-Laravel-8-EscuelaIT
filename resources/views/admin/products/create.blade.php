<x-base>
    <h1>Welcome to the products view</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" min="1" max="1000" name="price" value="{{ old('price') }}" required>
        </div>

        <div>
            <input type="submit" value="Crear Producto">
        </div>
    </form>

</x-base>
