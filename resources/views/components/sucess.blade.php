<x-overlay>
    <x-slot:header>
        <x-welcome-layout/>
    </x-slot:header>
    <div class="fixed inset-0 flex items-center justify-center z-50 bg-opacity-75 bg-gray-900">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="flex items-center mb-4">
                <div class="flex-shrink-0">
                    <svg class="w-12 h-12 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m3 0h3m-3-3h3m-3 0H9m3 0h3" />
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-bold text-gray-900">Upozornenie</p>
                    <p class="text-sm text-gray-700">Bol pridaný nový používateľ.</p>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded 1  focus:outline-none focus:shadow-outline">
                    Ok
                </button>
            </div>
        </div>
    </div>
</x-overlay>
