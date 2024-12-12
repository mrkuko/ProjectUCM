<x-overlay>
    <x-slot:headerSlot>
        <div class="flex flex-col justify-center items-start">
            <h2 class="text-2xl font-bold">{{ 'Welcome, ' . Auth::user()->name }}</h2><br> <!-- header -->
            <p class="text-sm">{{ 'Today is ' . date('l, jS F Y') }}</p> <!-- span -->
        </div>
    </x-slot:headerSlot>

    <div class="min-h-full">
        <div class="p-4">
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <div class="flex justify-between items-center">
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
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Zakúpiť tovar</button>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @php

                @endphp
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h3 class="text-lg font-bold mb-2">Transaction ID: 12345</h3>
                    <p class="text-gray-500">From: Location A</p>
                    <p class="text-gray-500">To: Location B</p>
                    <p class="text-gray-500">By: User Name</p>
                    <p class="text-gray-500">Products: Product 1, Product 2, Product 3</p>
                    <p class="text-gray-500">Price: $100.00</p>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">View Details</button>
                </div>
            </div>
        </div>
    </div>
</x-overlay>
