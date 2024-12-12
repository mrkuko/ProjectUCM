@props([
    'name',
    'image_url',
    'category',
    'id',
    'price',
    'amount',
])

<div class="bg-white p-4 rounded-lg shadow-md">
    <p class="text-center text-gray-500 text-sm">{{ $name }}</p>
    <img src="{{ $image_url }}" alt="Item Image" class="mx-auto">
    <div class="text-center mt-4">
        <p class="text-gray-500 text-sm">Kategória:</p>
        <p>{{ $category }}</p>
        <p class="text-gray-500 text-sm">Product ID:</p>
        <p>{{ $id }}</p>
        <p class="text-gray-500 text-sm">Cena:</p>
        <p>{{ $price }}</p>
        <p class="text-gray-500 text-sm">Množstvo:</p>
        <p>{{ $amount }}pcs</p>
        @if( \Illuminate\Support\Facades\Auth::user()->branches()->)

        @else

        @endif
        <p class="text-green-500">In stock</p>
    </div>
</div>
