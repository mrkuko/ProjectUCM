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
                    <h2 class="text-left text-3xl/9 font-extrabold tracking-tight text-gray-900 dark:text-gray-100">Sign In</h2>
                </div>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

                <form class="space-y-8" action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        {{--                TODO--}}
                        <label for="email" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Login</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-600 dark:text-indigo-100 hover:text-indigo-500">Forgot password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div class="gap-8 mt-12 h-16 flex justify-stretch">
                        <button type="submit" class="
                            flex w-full justify-center items-center rounded-md
                            bg-gradient-to-r from-my-blue01 to-my-blue02
                            px-3 py-1.5 text-sm/6 font-semibold text-white
                            shadow-sm hover:bg-indigo-500 focus-visible:outline
                            focus-visible:outline-2 focus-visible:outline-offset-2
                            focus-visible:outline-indigo-600">Sign in</button>
                    </div>
                </form>
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
