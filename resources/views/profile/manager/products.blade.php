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
                <div>
                    <input type="text" placeholder="Zadajte slovo..." class="border border-gray-300 p-2 rounded">
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pridať nový produkt</button>
            </div>

            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border border-gray-300 p-2">S/N</th>
                    <th class="border border-gray-300 p-2">Názov</th>
                    <th class="border border-gray-300 p-2">Popis</th>
                    <th class="border border-gray-300 p-2">ID</th>
                    <th class="border border-gray-300 p-2">Počet</th>
                    <th class="border border-gray-300 p-2">Kategória</th>
                    <th class="border border-gray-300 p-2">Aktivita</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border border-gray-300 p-2">01</td>
                    <td class="border border-gray-300 p-2">Produkt1</td>
                    <td class="border border-gray-300 p-2">Popis produktu</td>
                    <td class="border border-gray-300 p-2">1234ADM</td>
                    <td class="border border-gray-300 p-2">5263</td>
                    <td class="border border-gray-300 p-2">Papiernictvo</td>
                    <td class="border border-gray-300 p-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Nákup</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-overlay>
