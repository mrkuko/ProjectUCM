<div class="flex flex-col justify-center items-start">
    <h2 class="text-2xl font-bold">{{ 'Welcome, ' . Auth::user()->name }}</h2><br> <!-- header -->
    <p class="text-sm">{{ 'Today is ' . date('l, jS F Y') }}</p> <!-- span -->
</div>
