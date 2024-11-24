{{--
bg-gray-100
--}}
@props([
    'headerSlot' => 'Welcome',
    'headerAttributes'
])

<x-guest-layout class="flex justify-stretch">
    <div class="flex flex-row w-full justify-stretch">
        <!-- Side -->
        {{--        pr-3;border-r border-gray-200;--}}
        <aside id="logo-sidebar" class="flex justify-stretch flex-col w-64 h-full
            transition-transform -translate-x-full
            sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
            <div class="flex flex-col justify-center h-[25%] items-center flex-grow-2 shrink-0">
                <x-application-logo/>
                <p>Company name</p>
            </div>
            <div class="flex pb-4 flex-grow-2">
                <ul class="w-full font-medium">
                    <!-- Dashboard -->
                    {{--                    active="request()->is('login')--}}
                    <x-sidebar-li href="{{ '/' . Auth::user()->getRoleInBranch(Auth::user()->branches()->first()) . '/dashboard' }}"
                                  :active="request()->is('*/dashboard')" viewBox="0 0 22 21" class="m-0">
                        <x-slot:header>
                            Dashboard
                        </x-slot:header>
                        <x-slot:path>
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </x-slot:path>
                    </x-sidebar-li>
                    <!-- Stock -->
                    <x-sidebar-li href="{{ '/' . Auth::user()->getRoleInBranch(Auth::user()->branches()->first()) . '/stock' }}"
                                  :active="request()->is('*/stock')" viewBox="0 0 18 18" class="m-0">
                        <x-slot:header>Stock</x-slot:header>
                        <x-slot:path>
                            <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                        </x-slot:path>
                    </x-sidebar-li>
                    <!-- Logistics -->
                    <x-sidebar-li href="{{ '/' . Auth::user()->getRoleInBranch(Auth::user()->branches()->first()) . '/logistics' }}"
                                  :active="request()->is('*/logistics')" viewBox="0 0 20 20" class="m-0">
                        <x-slot:header>Logistics</x-slot:header>
                        <x-slot:path>
                            <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                        </x-slot:path>
                    </x-sidebar-li>
                    @can('role', 'admin,manager')
                        <!-- Employees -->
                        <x-sidebar-li href="{{ '/' . Auth::user()->getRoleInBranch(Auth::user()->branches()->first()) . '/employees' }}"
                                      :active="request()->is('*/employees')" viewBox="0 0 20 18" class="m-0">
                            <x-slot:header>Employees</x-slot:header>
                            <x-slot:path>
                                <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                            </x-slot:path>
                        </x-sidebar-li>
                        <!-- Products -->
                        <x-sidebar-li href="{{ '/' . Auth::user()->getRoleInBranch(Auth::user()->branches()->first()) . '/products' }}"
                                      :active="request()->is('*/products')" viewBox="0 0 18 20" class="m-0">
                            <x-slot:header>Products</x-slot:header>
                            <x-slot:path>
                                <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                            </x-slot:path>
                        </x-sidebar-li>
                    @endcan
                    @can('role', 'admin')
                        <!-- Warehouses -->
                        <x-sidebar-li href="{{ '/' . Auth::user()->getRoleInBranch(Auth::user()->branches()->first()) . '/warehouses' }}"
                                      :active="request()->is('*/warehouses')" viewBox="0 -64 640 640" class="m-0">
                            <x-slot:header>Warehouses</x-slot:header>
                            <x-slot:path>
                                <path d="M504 352H136.4c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8H504c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm0 96H136.1c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8h368c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm0-192H136.6c-4.4 0-8 3.6-8 8l-.1 48c0 4.4 3.6 8 8 8H504c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zm106.5-139L338.4 3.7a48.15 48.15 0 0 0-36.9 0L29.5 117C11.7 124.5 0 141.9 0 161.3V504c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8V256c0-17.6 14.6-32 32.6-32h382.8c18 0 32.6 14.4 32.6 32v248c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8V161.3c0-19.4-11.7-36.8-29.5-44.3z"/>
                            </x-slot:path>
                        </x-sidebar-li>
                    @endcan
                </ul>
            </div>
        </aside>

        <!-- Main View -->
        <div class="flex flex-1 flex-col justify-stretch bg-my-bg01">
            <!-- Top -->
            {{--            border-b border-gray-200--}}
            <!-- Primary Navigation Menu -->
            <div class="w-full flex justify-between mx-auto px-4 sm:px-6 lg:px-8 h-[9%]">
                <!-- Left Side Top Bar -->
                {{ $headerSlot }}

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
            {{--            <nav class="flex-initial h-[9%]">--}}
            {{--                <div class="h-full px-3 lg:px-5 lg:pl-3 flex items-center justify-between">--}}
            {{--                        <!-- Title -->--}}
            {{--                        <div class="flex items-center justify-start rtl:justify-end">--}}
            {{--                            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">--}}
            {{--                                <span class="sr-only">Open sidebar</span>--}}
            {{--                                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
            {{--                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>--}}
            {{--                                </svg>--}}
            {{--                            </button>--}}
            {{--                            <a href="https://flowbite.com" class="flex ms-2 md:me-24">--}}
            {{--                                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />--}}
            {{--                                <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}

            {{--                        <!-- User -->--}}
            {{--                        <div class="flex items-center">--}}
            {{--                            <div class="flex items-center ms-3">--}}
            {{--                                <div>--}}
            {{--                                    <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">--}}
            {{--                                        <span class="sr-only">Open user menu</span>--}}
            {{--                                        TODO--}}
            {{--                                        <x-user-logo type="man"/>--}}
            {{--                                        <img class="w-8 h-8 rounded-full" src="" alt="user photo">--}}
            {{--                                    </button>--}}
            {{--                                </div>--}}
            {{--                                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">--}}
            {{--                                    <div class="px-4 py-3" role="none">--}}
            {{--                                        <p class="text-sm text-gray-900 dark:text-white" role="none">--}}
            {{--                                            Neil Sims--}}
            {{--                                        </p>--}}
            {{--                                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">--}}
            {{--                                            neil.sims@flowbite.com--}}
            {{--                                        </p>--}}
            {{--                                    </div>--}}
            {{--                                    <ul class="py-1" role="none">--}}
            {{--                                        <li>--}}
            {{--                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">--}}
            {{--                                                Dashboard--}}
            {{--                                            </a>--}}
            {{--                                        </li>--}}
            {{--                                        <li>--}}
            {{--                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">--}}
            {{--                                                Settings--}}
            {{--                                            </a>--}}
            {{--                                        </li>--}}
            {{--                                        <li>--}}
            {{--                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">--}}
            {{--                                                Earnings--}}
            {{--                                            </a>--}}
            {{--                                        </li>--}}
            {{--                                        <li>--}}
            {{--                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">--}}
            {{--                                                Sign out--}}
            {{--                                            </a>--}}
            {{--                                        </li>--}}
            {{--                                    </ul>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                </div>--}}
            {{--            </nav>--}}

            <div {{ isset($attributes) ? $attributes->merge(['class'=>'flex-1 h-full']) : 'class=flex-1' }}>
                @if(isset($slot) && trim($slot))
                    {{ $slot }}
                @else
                    {{-- Render 404 --}}
                    @include('components.error404') {{-- Replace with the correct path if customized --}}
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
