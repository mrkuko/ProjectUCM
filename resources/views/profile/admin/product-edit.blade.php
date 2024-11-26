<x-overlay>
    <x-slot:header>
        <x-welcome-layout/>
    </x-slot:header>
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h1 class="text-lg font-bold mb-4">Nákup tovaru</h1>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="produkt">Produkt</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="produkt" type="text" placeholder="Enter item name">
        </div>

        <div class="mb-4 flex">
            <div class="w-1/2 mr-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="id">ID</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="id" type="text" placeholder="Enter ID">
            </div>
            <div class="w-1/2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="date">Date</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date" placeholder="DD/MM/YYYY">
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="pocet">Počet</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="pocet" type="number" placeholder="Enter realistic">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="vytvoril">Vytvoril</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="vytvoril" type="text" placeholder="Admin Name" disabled>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Uložiť objednávku
            </button>
        </div>
    </div>
</x-overlay>
