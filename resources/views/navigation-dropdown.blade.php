<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img height="50" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBH%0AZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9y%0AdCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8%0Ac3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6%0AeGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHZlcnNpb249%0AIjEuMSIgaWQ9IkxheWVyXzEiIHg9IjBweCIgeT0iMHB4IiB2aWV3Qm94PSIw%0AIDAgMTAwMCAxMDAwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAg%0AMCAxMDAwIDEwMDA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHN0eWxlIHR5%0AcGU9InRleHQvY3NzIj4KCS5zdDB7ZmlsbDojMjNGM0I4O30KPC9zdHlsZT4K%0APHBhdGggaWQ9IlhNTElEXzI3XyIgY2xhc3M9InN0MCIgZD0iTTM4My44LDUy%0ANC4xYzAtNTUuOCwxLjEtMTExLjYtMC4zLTE2Ny40QzM4MiwyOTYsNDI2Ljcs%0AMjUwLjksNDg2LjgsMjUzLjggIGMzNy41LDEuOCw3NS4yLDIsMTEyLjYtMC4y%0AYzI5LjgtMS44LDUzLjEsNy45LDczLjgsMjcuOWM0MC44LDM5LjUsODIuMiw3%0AOC40LDExOS4yLDEyMS42YzExLjEsMTMsMTYuNywyOCwxNi42LDQ1LjcgIGMt%0AMC40LDg0LjItMC4xLDE2OC41LTAuMiwyNTIuN2MtMC4xLDU0LjUtNDAuOSw5%0ANS05NS42LDk1Yy03Ny44LDAtMTU1LjYsMC4xLTIzMy40LDBjLTUzLjUtMC4x%0ALTk1LjYtNDEuNi05NS45LTk1LjMgIEMzODMuNSw2NDIuMSwzODMuOSw1ODMu%0AMSwzODMuOCw1MjQuMXogTTQzMSw1MjQuOWMwLDUuOSwwLDExLjgsMCwxNy43%0AYzAsNTAuNC0wLjMsMTAwLjksMC4xLDE1MS4zYzAuMywzNi41LDE3LjUsNTUu%0ANSw1MC4yLDU1LjYgIGM3Ni43LDAuMywxNTMuNSwwLjMsMjMwLjIsMGMzMS44%0ALTAuMSw1MS44LTIwLjcsNTEuOC01Mi44YzAuMS04Mi4xLDAuMS0xNjQuMiww%0ALTI0Ni4zYzAtMjEuNS05LjMtMzEuMy0zMC45LTMyICBjLTIwLjQtMC43LTQw%0ALjctMC44LTYxLjEtMS4xYy0xOC43LTAuMy0yNi4xLTcuNS0yNi41LTI2LjFj%0ALTAuNC0yMi41LDAtNDUuMS0xLjMtNjcuNWMtMS0xNy42LTkuNC0yNC40LTI3%0ALjEtMjQuNSAgYy00MC44LTAuMS04MS42LDAtMTIyLjMsMGMtNDUuOSwwLTYy%0ALjgsMTYuNy02Myw2My4xQzQzMC45LDQxNi41LDQzMSw0NzAuNyw0MzEsNTI0%0ALjl6Ii8+CjxwYXRoIGlkPSJYTUxJRF8xMV8iIGNsYXNzPSJzdDAiIGQ9Ik00%0AOTkuMywyMjcuNWMtMzYuNiw2LjktNzIuMiwxLjItMTA3LjcsMS43Yy0zMi43%0ALDAuNC02NS41LTAuMi05OC4yLDAuMiAgYy0zMi4yLDAuMy01MS42LDIwLjMt%0ANTEuNiw1Mi42Yy0wLjEsMTA3LjMsMC43LDIxNC43LTAuNiwzMjJjLTAuMywy%0ANC43LDIzLjcsNTMuNiw1Miw1MS40YzE4LjEtMS40LDM2LjUsMC4xLDU0Ljct%0AMC40ICBjOS4yLTAuMiwxMS44LDMuMywxMi4xLDEyLjJjMS4zLDM1LDEuNiwz%0ANS40LTMzLjksMzQuOGMtMjYuNS0wLjQtNTMuMSwzLjUtNzguNi0xMC4yYy0z%0AMS43LTE3LjEtNTAuNi00Mi41LTUxLTc3LjYgIGMtMS4yLTExNC4zLTEuMS0y%0AMjguNy0wLjEtMzQzYzAuNC01MC45LDQwLjQtODYuMyw5MC4yLTg4LjRjNDcu%0ANy0yLjEsOTUuNS0wLjUsMTQzLjMtMC40QzQ1MC4xLDE4Mi40LDQ4MS4xLDIw%0AMi43LDQ5OS4zLDIyNy41eiIvPgo8cGF0aCBpZD0iWE1MSURfMl8iIGNsYXNz%0APSJzdDAiIGQ9Ik00NDguMSw1ODMuMmMwLjUtODIuNyw2Ny41LTE0OC43LDE0%0AOS44LTE0Ny42Yzg0LjUsMS4xLDE0Ny43LDY1LjcsMTQ3LjEsMTUwLjIgIGMt%0AMC42LDgxLjgtNjcuNCwxNDguMS0xNDguNywxNDcuNkM1MTQuNCw3MzIuOCw0%0ANDcuNiw2NjUuMiw0NDguMSw1ODMuMnogTTUwNi41LDYyMC42YzMzLjgsMCwz%0ANC4yLDAsMzMuNi0zMS42ICBjLTAuMi0xMy4xLDYuNi0zMC41LTEuOC0zOC4x%0AYy05LjEtOC4yLTI2LjUtMi40LTQwLjMtMi42Yy0yOC40LTAuMy0yOC44LDAu%0AMy0zMC4zLDI5LjFjLTAuMSwxLjEsMCwyLjEsMCwzLjIgIEM0NjYuOSw2MTku%0ANiw0NjcuOCw2MjAuNiw1MDYuNSw2MjAuNnogTTY1Mi44LDU4NC4xYzAsMzYu%0ANSwwLDM2LjUsMzAuNSwzNi41YzQwLjksMCw0Ni40LTYuMiw0MS44LTQ3Ljlj%0ALTAuNS00LjItMS44LTguNC0yLjEtMTIuNiAgYy0wLjctOS42LTUuOS0xMi40%0ALTE1LTEyYy0xMi44LDAuNi0yNS43LDEtMzguNS0wLjFjLTE0LjYtMS4yLTIw%0ALjksMi45LTE3LDE4LjVDNjUzLjksNTcyLDY1Mi44LDU3OC4yLDY1Mi44LDU4%0ANC4xeiBNNjMyLjEsNTg0LjggIGMwLTM2LjUsMC0zNi41LTM1LjctMzYuNWMt%0AMzUuNSwwLTM1LjUsMC0zNS40LDM2LjZjMCwzNS43LDAsMzUuNywzNC44LDM1%0ALjdDNjMyLjEsNjIwLjYsNjMyLjEsNjIwLjYsNjMyLjEsNTg0Ljh6IE01OTUu%0AOCw2NDAuOCAgYy04LjEsMC0xNi4xLTAuMS0yNC4yLDBjLTMuOSwwLTcuNSww%0ALTYuNiw2YzMuMywyMS41LDEwLDQxLjcsMjIuNCw1OS42YzQuOCw3LDEwLjUs%0ANy41LDE3LjQsMS4zYzkuNC04LjUsMTIuNC0xOS45LDE2LTMwLjkgIEM2MzIu%0AOCw2NDAuOSw2MzIuNiw2NDAuOCw1OTUuOCw2NDAuOHogTTU5Ni42LDUyOGMz%0ANC42LDAsMzQuNywwLDI1LjItMzMuNGMtMi41LTguNy01LjMtMTcuNS05Ljgt%0AMjUuMyAgYy0xMC41LTE4LjEtMTkuNy0xNy43LTI5LjgsMC43Yy00LjEsNy40%0ALTgsMTUuMS0xMC41LDIzLjJDNTYwLjksNTI4LDU2MS4xLDUyOCw1OTYuNiw1%0AMjh6IE01NjQuMyw0NjAuMSAgYy00MC40LDEwLjItNjUuNCwzMy4zLTgzLjgs%0ANjcuOWMxOS42LDAsMzYuNy0wLjIsNTMuOCwwLjFjNy4yLDAuMSw5LjMtMi43%0ALDExLjMtOS44QzU1MC44LDQ5OS45LDU1My40LDQ4MC42LDU2NC4zLDQ2MC4x%0AeiAgIE01NjQuOSw3MDkuNWMtMTAuOS0yMS44LTE0LjEtNDEuNC0xOS41LTYw%0ALjNjLTEuNi01LjYtMy40LTguNC05LjMtOC4zYy0xNy45LDAuMS0zNS44LDAt%0ANTUuNywwQzQ5OS43LDY3NSw1MjUuMiw2OTcuMiw1NjQuOSw3MDkuNSAgeiBN%0ANzExLjQsNTI4Yy0xMi43LTM0LjEtNTMuNy02Ni40LTgwLjItNjIuOWMxMC4z%0ALDE3LjcsMTQuNSwzNi44LDE3LDU2LjNjMC45LDcsNS44LDYuNiwxMC42LDYu%0ANkM2NzUuOSw1MjgsNjkzLDUyOCw3MTEuNCw1Mjh6ICAgTTcxMi41LDY0MC45%0AYy0yMC4zLDAtMzguMywwLTU2LjMsMGMtMy4zLDAtNy4xLDAuNS03LjYsNC4z%0AYy0yLjUsMjEuNS05LjMsNDEuOC0yMC41LDY1LjNDNjY3LjQsNjk2LjEsNjk0%0ALjYsNjc2LDcxMi41LDY0MC45eiIvPgo8L3N2Zz4K" class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-jet-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>
                        @else
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        <!-- Team Management -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Team') }}
                            </div>

                            <!-- Team Settings -->
                            <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-jet-dropdown-link>

                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                            @endcan

                            <div class="border-t border-gray-100"></div>

                            <!-- Team Switcher -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Switch Teams') }}
                            </div>

                            @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                            @endforeach

                            <div class="border-t border-gray-100"></div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-jet-responsive-nav-link>

                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                        {{ __('Create New Team') }}
                    </x-jet-responsive-nav-link>

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>
