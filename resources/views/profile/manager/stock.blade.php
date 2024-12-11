<x-overlay>
    <x-slot:headerSlot>
        <div class="flex flex-col justify-center items-start">
            <h2 class="text-2xl font-bold">{{ 'Welcome, ' . Auth::user()->name }}</h2><br> <!-- header -->
            <p class="text-sm">{{ 'Today is ' . date('l, jS F Y') }}</p> <!-- span -->
        </div>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="grid grid-cols-4 gap-4">
{{--            {{ dd(Auth::user()->getBranch()?->products()->first()->name) }}--}}
            @foreach(Auth::user()->getBranch()->products as $product)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <p class="text-center text-gray-500 text-sm">{{ $product->name }}</p>
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="mx-auto">
                    <div class="text-center mt-4">
                        <p class="text-gray-500 text-sm">Kategória:</p>
                        <p>{{ $product->category }}</p>
                        <p class="text-gray-500 text-sm">Product ID:</p>
                        <p>{{ $product->id }}</p>
                        <p class="text-gray-500 text-sm">Cena:</p>
                        <p>{{ $product->price }} €</p>
                        <p class="text-gray-500 text-sm">Množstvo:</p>
                        <p> {{ $product->pivot->amount }}</p>
                        @if($product->pivot->amount > 25)
                            <p class="text-green-500">In stock</p>
                        @else
                            @if($product->pivot->amount > 5)
                                <p class="text-orange-500">Low in stock</p>
                            @else
                                <p class="text-red-500">Out of Stock</p>
                            @endif
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-overlay>
