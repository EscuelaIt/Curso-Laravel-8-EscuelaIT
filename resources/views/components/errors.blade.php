@if ($errors->any())
    <div class="max-w-2xl mx-auto bg-red-300 p-3 mt-5 border rounded-lg">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-600">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

