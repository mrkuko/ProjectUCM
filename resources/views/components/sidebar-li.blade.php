@props([
    'active' => false,
    'viewBox',
    'path'
])

@if($active)
    <li class="flex bg-my-bg01 h-16">
        <a {{ $attributes->merge(['class'=>'flex items-center w-full text-gray-900 py-1
                dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group']) }}>
            <svg class="flex justify-stretch h-full w-auto" viewBox="0 0 6 50"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0H1C3.76142 0 6 2.23858 6 5V45C6 47.7614 3.76142 50 1 50H0V0Z"
                      fill="url(#paint0_linear_124_431)"/>
                <defs>
                    <linearGradient id="paint0_linear_124_431" x1="3" y1="0" x2="3" y2="50"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#14ADD6"/>
                        <stop offset="1" stop-color="#324A5E"/>
                    </linearGradient>
                </defs>
            </svg>
            <svg class="pl-4 w-auto h-5 text-gray-500 transition duration-75
            dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                 aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="{{ $viewBox ?? '' }}"
            >
                {!! str_replace('<path ', '<path fill="url(#paint0_linear_117_946)" ', $path) !!}
                <defs>
                    <linearGradient id="paint0_linear_117_946" x1="0" y1="0" x2="16.8001" y2="16.8001"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#14ADD6"/>
                        <stop offset="1" stop-color="#324A5E"/>
                    </linearGradient>
                </defs>
            </svg>
            <p class="ms-3 text-4l font-extrabold bg-gradient-to-r from-my-blue01 to-my-blue02 text-transparent bg-clip-text">
                {{ $header }}
            </p>
        </a>
    </li>
@else
    <li class="flex h-16">
        <a {{ $attributes->merge(['class'=>'flex items-center w-full text-gray-900 py-1 pl-6
                dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group']) }}>
            {{--                            TODO--}}
            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="{{ $viewBox ?? '' }}">
                {!! str_replace('<path ', '<path fill="currentColor" ', $path) !!}
            </svg>
            <span class="ms-3">{{ $header }}</span>
        </a>
    </li>
@endif

