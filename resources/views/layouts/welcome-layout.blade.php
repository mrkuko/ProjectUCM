<x-guest-layout xmlns="http://www.w3.org/1999/html">
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="h-full flex justify-stretch items-stretch w-full">
        <div class="
            bg-white basis-1/2 flex h-full flex-col w-1/2 items-start justify-start px-6 py-12 lg:px-8">
            <div class="flex flex-col justify-between items-start sm:mx-auto sm:w-full sm:max-w-sm h-1/4">
                <x-application-logo class="h-[80px] w-[80px]"/>
                {{--                <img class="size-16 w-auto" src="{{ asset("icon.svg") }}" alt="Company Logo">--}}
                <div>
                    <p class="mt-10 dark:text-gray-500">Welcome</p>
                    <h2 class="text-left text-3xl/9 font-extrabold tracking-tight text-gray-900 dark:text-gray-100">{{ $header ?? '' }}</h2>
                </div>
            </div>

            <div {{ $attributes->merge(['class'=>"mt-10 sm:mx-auto sm:w-full sm:max-w-sm"]) }}>
                {{ $slot }}
            </div>
        </div>
        <div class="relative h-full overflow-hidden basis-1/2">
            <img
                src="{{ asset('img.png') }}"
                class="
                    h-full
                    absolute
                    left-0
                    w-auto
                    top-0
                    max-w-none
                "
            >
        </div>
    </div>
</x-guest-layout>
