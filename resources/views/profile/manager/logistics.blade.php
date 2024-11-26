<x-overlay>
    <x-slot:headerSlot>
        <div class="flex flex-col justify-center items-start">
            <h2 class="text-2xl font-bold">{{ 'Welcome, ' . Auth::user()->name }}</h2><br> <!-- header -->
            <p class="text-sm">{{ 'Today is ' . date('l, jS F Y') }}</p> <!-- span -->
        </div>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-bold mb-2">Transaction ID: 12345</h3>
                <p class="text-gray-500">From: Location A</p>
                <p class="text-gray-500">To: Location B</p>
                <p class="text-gray-500">By: User Name</p>
                <p class="text-gray-500">Products: Product 1, Product 2, Product 3</p>
                <p class="text-gray-500">Price: $100.00</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">View Details</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-bold mb-2">Transaction ID: 67890</h3>
                <p class="text-gray-500">From: Location C</p>
                <p class="text-gray-500">To: Location D</p>
                <p class="text-gray-500">By: User Name</p>
                <p class="text-gray-500">Products: Product 4, Product 5</p>
                <p class="text-gray-500">Price: $50.00</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">View Details</button>
            </div>

        </div>
    </div>
</x-overlay>
