<x-overlay>
    <x-slot:headerSlot>
        <div class="flex flex-col justify-center items-start">
            <h2 class="text-2xl font-bold">Prehľad skladov</h2><br> <!-- header -->
            <p class="text-sm">{{ 'Today is ' . date('l, jS F Y') }}</p> <!-- span -->
        </div>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="grid grid-cols-4 gap-4">
            @foreach(Auth::user()->branches as $branch)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <p class="text-center text-gray-500 text-sm">{{ $branch->name }}</p>
                    <img src="{{ asset('warehouse.png') }}" alt="{{ $branch->name }}" class="mx-auto">
                    <div class="text-center mt-4">
                        <p class="text-gray-500 text-sm">Lokalita:</p>
                        <p>{{ $branch->city }}</p>
                        <p class="text-gray-500 text-sm">ID:</p>
                        <p>{{ $branch->id }}</p>
                        @php
                            $totalProducts = 0;
                            foreach ($branch->products as $product) {
                                $totalProducts += $product->pivot->amount;
                            }
                        @endphp
                        <p class="text-gray-500 text-sm">Dostupné výrobky:</p>
                        <p>{{ $totalProducts }} ks</p>
                        <p class="text-gray-500 text-sm">Budget:</p>
                        <p> {{ $branch->budget }}</p>
                        @if($branch->active)
                            <p class="text-green-500">Active</p>
                        @else
                            <p class="text-red-500">Disabled</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-overlay>
