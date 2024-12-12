<x-overlay>
    <x-slot:headerSlot>
        <x-dash-board-welcome/>
    </x-slot:headerSlot>

    <div class="p-4 min-h-full">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-xl font-bold">Rýchle vyhľadávanie zamestnancov</h2>
                    <form method="GET" class="w-full">
                        <div class="relative text-gray-600 focus-within:text-gray-400">
                            <input type="search" name="q" class="py-2 text-sm rounded-md" placeholder="Search..." autocomplete="off">
                            <span class="absolute inset-y-0 right-0 flex items-center pl-2">
                                <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                            </span>
                        </div>
                    </form>

                </div>
                <div>
                    <p class="text-gray-500 text-sm">Celkový počet zamestnancov</p>
                    <h2 class="text-2xl font-bold">180</h2>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Filtrovanie</p>
                    <select class="border border-gray-300 p-2 rounded mt-2">
                        <option value="all">všetci</option>
                        <option value="seller">admin</option>
                        <option value="manager">manager</option>
                        <option value="admin">seller</option>
                    </select>
                </div>
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        href="{{ route('admin.employee-add') }}">Pridať zamestnanca</a>            </div>

            <table class="w-full border-collapse">
                <thead>
                <tr>
                    <th class="text-left p-2">S/N</th>
                    <th class="text-left p-2">Meno</th>
                    <th class="text-left p-2">Priezvisko</th>
                    <th class="text-left p-2">Pohlavie</th>
                    <th class="text-left p-2">ID</th>
                    <th class="text-left p-2">Telefónne číslo</th>
                    <th class="text-left p-2">Pozícia</th>
                    <th class="text-left p-2">Aktivita</th>
                </tr>
                </thead>
                <tbody>3
                @php
                    $query = Auth::user()->getBranch()->users();
                    if (request()->has('q')) {
                        $q = request()->input('q');
                        $query->where(function ($query) use ($q) {
                            $query->where('users.id', 'like', "%{$q}%")
                                 ->orWhere('users.name', 'like', "%{$q}%")
                                 ->orWhere('users.email', 'like', "%{$q}%")
                                 ->orWhere('user_branch.position', 'like', "%{$q}%");
                        });
                    }
//                    $positionFilter = request()->input('position', 'all');
//                    if ($positionFilter !== 'all') {
//                        $query->whereHas('branches', function ($subQuery) use ($positionFilter) {
//                            $subQuery->where('user_branch.position', $positionFilter);
//                        });
//                    }

                    // Paginate the results
                    $users = $query->paginate(10);
                @endphp
                @foreach($users as $user)
                    <tr>
                        <td class="border-b border-gray-300 p-2">01</td>
                        <td class="border-b border-gray-300 p-2">Mária</td>
                        <td class="border-b border-gray-300 p-2">Nováková</td>
                        <td class="border-b border-gray-300 p-2">Žena</td>
                        <td class="border-b border-gray-300 p-2">1234ADM</td>
                        <td class="border-b border-gray-300 p-2">0956827635</td>
                        <td class="border-b border-gray-300 p-2">Admin</td>
                        <td class="border-b border-gray-300 p-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Edit</button></td>
                    </tr>
                @endforeach
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
