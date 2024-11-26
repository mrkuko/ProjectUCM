<x-overlay>
    <x-slot:headerSlot>
        <div class="flex flex-col justify-center items-start">
            <h2 class="text-2xl font-bold">{{ 'Welcome, ' . Auth::user()->name }}</h2><br> <!-- header -->
            <p class="text-sm">{{ 'Today is ' . date('l, jS F Y') }}</p> <!-- span -->
        </div>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="grid grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-center text-gray-500 text-sm">Item name</p>
                <img src="your_image_url" alt="Item Image" class="mx-auto">
                <div class="text-center mt-4">
                    <p class="text-gray-500 text-sm">Kategória:</p>
                    <p>Stationaries</p>
                    <p class="text-gray-500 text-sm">Product ID:</p>
                    <p>45656787</p>
                    <p class="text-gray-500 text-sm">Cena:</p>
                    <p>N100.00</p>
                    <p class="text-gray-500 text-sm">Množstvo:</p>
                    <p>40pcs</p>
                    <p class="text-green-500">In stock</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-center text-gray-500 text-sm">Item name</p>
                <img src="your_image_url" alt="Item Image" class="mx-auto">
                <div class="text-center mt-4">
                    <p class="text-gray-500 text-sm">Kategória:</p>
                    <p>Stationaries</p>
                    <p class="text-gray-500 text-sm">Product ID:</p>
                    <p>45656787</p>
                    <p class="text-gray-500 text-sm">Cena:</p>
                    <p>N100.00</p>
                    <p class="text-gray-500 text-sm">Množstvo:</p>
                    <p>40pcs</p>
                    <p class="text-red-500">Out of Stock</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-center text-gray-500 text-sm">Item name</p>
                <img src="your_image_url" alt="Item Image" class="mx-auto">
                <div class="text-center mt-4">
                    <p class="text-gray-500 text-sm">Kategória:</p>
                    <p>Stationaries</p>
                    <p class="text-gray-500 text-sm">Product ID:</p>
                    <p>45656787</p>
                    <p class="text-gray-500 text-sm">Cena:</p>
                    <p>N100.00</p>
                    <p class="text-gray-500 text-sm">Množstvo:</p>
                    <p>40pcs</p>
                    <p class="text-orange-500">Low in stock</p>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-center text-gray-500 text-sm">Item name</p>
                <img src="your_image_url" alt="Item Image" class="mx-auto">
                <div class="text-center mt-4">
                    <p class="text-gray-500 text-sm">Kategória:</p>
                    <p>Stationaries</p>
                    <p class="text-gray-500 text-sm">Product ID:</p>
                    <p>45656787</p>
                    <p class="text-gray-500 text-sm">Cena:</p>
                    <p>N100.00</p>
                    <p class="text-gray-500 text-sm">Množstvo:</p>
                    <p>40pcs</p>
                    <p class="text-green-500">In stock</p>
                </div>
            </div>
        </div>
    </div>
</x-overlay>
