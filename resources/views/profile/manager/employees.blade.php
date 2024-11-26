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
                    <h2 class="text-xl font-bold">Rýchle vyhľadávanie zamestnancov</h2>
                    <input type="text" placeholder="Zadajte slovo..." class="border border-gray-300 p-2 rounded">
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Celkový počet zamestnancov</p>
                    <h2 class="text-2xl font-bold">180</h2>
                    <select class="border border-gray-300 p-2 rounded mt-2">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Pridať zamestnanca</button>
            </div>

            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="border border-gray-300 p-2">S/N</th>
                    <th class="border border-gray-300 p-2">Meno</th>
                    <th class="border border-gray-300 p-2">Priezvisko</th>
                    <th class="border border-gray-300 p-2">Pohlavie</th>
                    <th class="border border-gray-300 p-2">ID</th>
                    <th class="border border-gray-300 p-2">Telefónne číslo</th>
                    <th class="border border-gray-300 p-2">Pozícia</th>
                    <th class="border border-gray-300 p-2">Aktivita</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border border-gray-300 p-2">01</td>
                    <td class="border border-gray-300 p-2">Mária</td>
                    <td class="border border-gray-300 p-2">Nováková</td>
                    <td class="border border-gray-300 p-2">Žena</td>
                    <td class="border border-gray-300 p-2">1234ADM</td>
                    <td class="border border-gray-300 p-2">0956827635</td>
                    <td class="border border-gray-300 p-2">Admin</td>
                    <td class="border border-gray-300 p-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</button></td>
                </tr>
                </tbody>
            </table>

            <div class="flex justify-center mt-4">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded 1  mr-2">1</button>
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2">2</button>
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2">3</button>
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2">4</button>
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-4 rounded mr-2">5</button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">>></button>
            </div>
        </div>
    </div>
</x-overlay>
