<x-welcome-layout>
    <form class="space-y-8" action="{{ route('login') }}" method="POST">
        @csrf

        <!-- Email Address -->
        <div>
            {{--                TODO--}}
            <label for="email" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Email</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-gray-100 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
            </div>
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Password</label>
                <div class="text-sm">
                    <a href="{{ route('password.request') }}" class="font-semibold text-indigo-600 dark:text-indigo-100 hover:text-indigo-500">Forgot password?</a>
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
</x-welcome-layout>
