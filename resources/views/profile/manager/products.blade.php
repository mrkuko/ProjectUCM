<x-overlay>
    <x-slot:headerSlot>
        <div class="flex flex-col justify-center items-start">
            <h2 class="text-2xl font-bold">{{ 'Welcome, ' . Auth::user()->name }}</h2><br> <!-- header -->
            <p class="text-sm">{{ 'Today is ' . date('l, jS F Y') }}</p> <!-- span -->
        </div>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-4">
                <form method="GET">
                    <div class="relative text-gray-600 focus-within:text-gray-400">
                        <input type="search" name="q" class="py-2 text-sm rounded-md" placeholder="Search..." autocomplete="off">
                        <span class="absolute inset-y-0 right-0 flex items-center pl-2">
                        <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                      </span>
                    </div>
                </form>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pridať nový produkt</button>
            </div>

            <table class="w-full">
                <thead>
                <tr>
                    <th class="p-2 text-left">ID</th>
                    <th class="p-2 text-left">Názov</th>
                    <th class="p-2 text-left">Popis</th>
                    <th class="p-2 text-left">Cena</th>
                    <th class="p-2 text-left">Kategória</th>
                    <th class="p-2 text-left">Aktivita</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $query = \App\Models\Product::query();
                    if (request()->has('q')) {
                        $q = request()->input('q');
                        $query->where(function ($query) use ($q) {
                            $query->where('id', 'like', $q . '%')
                                 ->orWhere('name', 'like', $q . '%');
                        });
                    }
                    $products = $query->get();
                @endphp
                @foreach($products as $product)
                    <tr>
                        <td class="border-b border-gray-300 p-2">{{ $product->id }}</td>
                        <td class="border-b border-gray-300 p-2">{{ $product->name }}</td>
                        <td class="border-b border-gray-300 p-2">{{ $product->description }}</td>
                        <td class="border-b border-gray-300 p-2">{{ $product->price }}</td>
                        <td class="border-b border-gray-300 p-2">{{ $product->category }}</td>
                        <td class="border-b border-gray-300 p-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Nákup</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-overlay>
