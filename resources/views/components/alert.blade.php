@if (session('success'))
    <div class="bg-green-100 text-green-700 border border-green-300 rounded p-3 mb-4">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-100 text-red-700 border border-red-300 rounded p-3 mb-4">
        {{ session('error') }}
    </div>
@endif