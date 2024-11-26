<x-overlay>
    <x-slot:headerSlot>
        <x-dash-board-welcome/>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-500 text-sm">Počet zasielok</p>
                <h2 class="text-3xl font-bold">5,205,350.00</h2>
                <p class="text-green-500 text-sm">↑ 0.2% viac ako minulý mesiac</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-500 text-sm">Počet prijatých zasielok</p>
                <h2 class="text-3xl font-bold">4,550,350.00</h2>
                <p class="text-green-500 text-sm">↑ 0.1% viac ako minulý mesiac</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-500 text-sm">Počet jednotlivo predaných produktov</p>
                <h2 class="text-3xl font-bold">6,550,350.00</h2>
                <p class="text-red-500 text-sm">↓ 2.1% menej ako minulý mesiac</p>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md">
                <p class="text-gray-500 text-sm">Počet odoslaných zásielok</p>
                <h2 class="text-3xl font-bold">150,350.00</h2>
                <p class="text-red-500 text-sm">↓ 1.5% menej ako minulý mesiac</p>
            </div>

            <div class="col-span-2 bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4">Ročný prehľad zásielok</h3>
            </div>

            <div class="col-span-2 bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4">Hlavní odoberatelia</h3>
                <table class="w-full border-collapse">
                    <thead>
                    <tr>
                        <th class="border border-gray-300 p-2">N</th>
                        <th class="border border-gray-300 p-2">Meno odberateľa</th>
                        <th class="border border-gray-300 p-2">ID odberateľa</th>
                        <th class="border border-gray-300 p-2">Odoslané zásielky</th>
                        <th class="border border-gray-300 p-2">Očakávané zásielky</th>
                        <th class="border border-gray-300 p-2">Stav</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="border border-gray-300 p-2">01</td>
                        <td class="border border-gray-300 p-2">Meno</td>
                        <td class="border border-gray-300 p-2">45656787</td>
                        <td class="border border-gray-300 p-2">50pcs</td>
                        <td class="border border-gray-300 p-2">40pcs</td>
                        <td class="border border-gray-300 p-2 bg-green-100 text-green-700">Aktívny</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-overlay>
