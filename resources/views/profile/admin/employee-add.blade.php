<x-overlay>
    <x-slot:headerSlot>
        <x-dash-board-welcome/>
    </x-slot:headerSlot>
    <div class="flex flex-col bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('admin.employees') }}" class="text-blue-500 hover:text-blue-700">
                Back
            </a>
        </div>

        <form method="POST" action="{{ route('admin.employee-add') }}">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col justify-between">
                    <img src="{{ asset('icon-seller.png') }}"
                         class="h-25 w-25"/>
                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <x-input-label for="name" :value="__('Meno')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="salary" :value="__('Mzda')" />
                        <x-text-input id="salary" class="block mt-1 w-full" type="text" name="salary" :value="old('salary')" required autofocus autocomplete="salary" />
                        <x-input-error :messages="$errors->get('salary')" class="mt-2" />
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            ID pobočky
                        </label>
                        @php
                        $branches = \Illuminate\Support\Facades\Auth::user()->branches;
                        @endphp
                        <select class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                                name="branch_id">
                            <option value="">Vyber pobočku</option>
                            @foreach($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->get('branch_id'))
                            <ul class="text-sm text-red-600 dark:text-red-400 space-y-1">
                                @foreach ((array) $messages as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div>
                        <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                            Pozícia
                        </label>
                        <select class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full" name="position">
                            <option value="">Select a position</option>
                            <option value="seller">Predávajúci</option>
                            <option value="manager">Manažér</option>
                            <option value="admin">Admin</option>
                        </select>
                        @if ($errors->get('salary'))
                            <ul class="text-sm text-red-600 dark:text-red-400 space-y-1">
                                @foreach ((array) $messages as $message)
                                    <li>{{ $message }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div>
                        <x-input-label for="gender" :value="__('Pohlavie')" />
                        <x-text-input id="gender" class="block mt-1 w-full" type="text"
                                      name="gender" :value="old('gender')" required autofocus autocomplete="gender" />
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="phone" :value="__('Telefónne Číslo')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="tel"
                                      name="phone" :value="old('phone')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Heslo')" />
                        <x-text-input id="password" class="block mt-1 w-full"
                                      type="password"
                                      name="password"
                                      required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Potvrď Heslo')" />
                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                      type="password"
                                      name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-overlay>
