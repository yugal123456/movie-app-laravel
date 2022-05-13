<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Movie App</title>

    {{-- <livewire:styles> --}}
        @livewireStyles
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        {{-- <script src="./TW-ELEMENTS-PATH/dist/js/index.min.js"></script> --}}
</head>

<body class="font-sans bg-blue-900 text-white">
    {{-- start --}}

    {{-- end --}}
    <nav class="border-b border-blue-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-2 py-2">
            <ul class="flex flex-col md:flex-row items-center">
                <li><a href="{{ route('movies.index') }}">
                        <img alt="image" class="md:ml-16 mt-3 md:mt-0" src="{{ asset('img/test2.jpg') }}"
                            width="125px" /></a></li>
            </ul>
            <div
                class="text-md font-medium text-center text-blue-100  border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="mr-2">
                        <a href="{{ route('movies.index') }}"
                        {{-- inline-block p-4 text-blue-100 rounded-t-lg border-b-2 border-blue-600 dark:text-blue-500 hover:border-gray-300 --}}
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-600 hover:border-gray-300 dark:hover:text-gray-300"
                            aria-current="page">Movies</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('tv.index') }}"
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-600 hover:border-gray-300 dark:hover:text-gray-300">TV
                            Shows</a>
                    </li>
                    {{-- Start Multilangual --}}
                    <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
                        <div>
                            <button x-on:click="show = !show" type="button"
                                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-blue-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <p>Language</p>
                            </button>
                        </div>
                        <div x-show="show"
                            class="origin-top-right absolute right-0 mt-2 w-48  shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                            <a href="#" class="block px-4 py-2 border-b-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-1">English</a>

                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                id="user-menu-item-2">Arabic</a>
                        </div>
                    </div>
                    {{-- End Multilangual --}}

                </ul>
            </div>
            {{-- Search section --}}
            <div class="flex flex-col md:flex-row items-center py-5">
                <livewire:search-drop-down>
                    <div class="ml-4">
                        {{-- <a href="#">
                            <img src="{{ asset('img/avatar.webp') }}" alt="avatar" class="rounded-full w-8 h-8">
                        </a> --}}
                    </div>
            </div>
        </div>
    </nav>
    @yield('content')
    {{-- <livewire:script> --}}
        @livewireScripts

</body>

</html>