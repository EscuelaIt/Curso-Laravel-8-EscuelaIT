@if (session()->has('success'))
    <div class="max-w-2xl mx-auto bg-green-300 p-3 mt-5 border rounded-lg">
        <p class="text-green-600">
            {{ session()->get('success') }}
        </p>
    </div>
@endif

