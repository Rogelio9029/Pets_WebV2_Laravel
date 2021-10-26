<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo2.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="h-screen overflow-y-hidden bg-white" x-data="setup()">
        <header class="bg-white">
            <div class="flex items-center px-2 py-3">
                <!-- Navbar left -->
                <div class="flex-1 items-center space-x-3">
                    <span class="items-center p-2 text-xl font-semibold tracking-wider uppercase hidden lg:flex ">
                        <img src="{{ asset('images/logo3.png') }}" width="75" height="auto" alt="PetsWeb" srcset="">
                        <h1 class="text-sm md:text-md lg:text-lg font-bold ml-2 text-yellow-500">Admin</h1>
                    </span>
                    <!-- Toggle sidebar button -->
                    <button @click.away="isSidebarOpen = false" @click="toggleSidbarMenu()"
                        class="p-2 lg:hidden rounded-md focus:outline-none focus:ring">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile search box -->
                <div x-show.transition="isSearchBoxOpen" class="fixed inset-0 z-20 bg-black bg-opacity-20"
                    style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)">
                    <div @click.away="isSearchBoxOpen = false"
                        class="absolute inset-x-0 flex items-center justify-between p-2 bg-white shadow-md">
                        <div class="flex items-center flex-1 px-2 space-x-2">
                            <span>
                                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                            <input type="text" placeholder="Search"
                                class="w-full px-4 py-3 text-gray-600 rounded-md focus:bg-gray-100 focus:outline-none" />
                        </div>
                        <button @click="isSearchBoxOpen = false" class="flex-shrink-0 p-4 rounded-md">
                            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Desktop search box -->
                <div class="items-center hidden px-2 space-x-2 md:flex md:ml-5">
                    <span>
                        <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </span>
                    <input type="text" placeholder="Search"
                        class="px-4 py-3 rounded-md hover:bg-gray-100 lg:max-w-sm md:py-2 md:flex-1 focus:outline-none md:focus:bg-gray-100 md:focus:border" />
                </div>

                <!-- Navbar right -->
                <div class="relative flex items-center space-x-3">
                    <!-- Search button -->
                    <button @click="isSearchBoxOpen = true"
                        class="p-2 bg-gray-100 rounded-full md:hidden focus:outline-none focus:ring hover:bg-gray-200">
                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>

                    <div class="items-center hidden space-x-3 md:flex">
                        <!-- Services Button -->
                        <div x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                            </button>

                            <!-- Dropdown -->
                            <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false"
                                class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1">
                                <div class="p-4 text-lg font-medium border-b">Web apps & services</div>
                                <ul class="flex flex-col p-2 my-3 space-y-3">
                                    <li>
                                        <a href="#"
                                            class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                            <span class="block mt-1">
                                                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                    <path fill="#fff"
                                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                                </svg>
                                            </span>
                                            <span class="flex flex-col">
                                                <span class="text-lg">Atlassian</span>
                                                <span class="text-sm text-gray-400">Lorem ipsum dolor sit.</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                            <span class="block mt-1">
                                                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                                </svg>
                                            </span>
                                            <span class="flex flex-col">
                                                <span class="text-lg">Slack</span>
                                                <span class="text-sm text-gray-400">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                    <a href="#">Show all apps</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notification Button -->
                    <div class="relative" x-data="{ isOpen: false }">
                        <!-- red dot notification-->
                        <div class="absolute right-0 p-1 bg-red-400 rounded-full animate-ping"></div>
                        <div class="absolute right-0 p-1 bg-red-400 border rounded-full"></div>
                        <button @click="isOpen = !isOpen"
                            class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>

                        <!-- Dropdown card -->
                        <div @click.away="isOpen = false" x-show="isOpen"
                            class="absolute w-48 max-w-md mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1">
                            <div class="p-4 font-medium border-b">
                                <span class="text-gray-800">Notification</span>
                            </div>
                            <ul class="flex flex-col p-2 my-2 space-y-1">
                                <li>
                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                        Link</a>
                                </li>
                            </ul>
                            <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                                <a href="#">See All</a>
                            </div>
                        </div>
                    </div>

                    <!-- avatar button -->
                    <div class="relative" x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen"
                            class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
                            <img class="object-cover w-8 h-8 rounded-full"
                                src="https://avatars0.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                                alt="Ahmed Kamel" />
                        </button>
                        <!-- green dot -->
                        <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                        <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3">
                        </div>

                        <!-- Dropdown card -->
                        <div @click.away="isOpen = false" x-show="isOpen"
                            class="absolute mt-3 transform origin-top-right -translate-x-full bg-white rounded-md shadow-lg min-w-max"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1">
                            <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                                <span class="text-gray-800">Ahmed Kamel</span>
                                <span class="text-sm text-gray-400">ahmed.kamel@example.com</span>
                            </div>
                            <ul class="flex flex-col p-2 my-2 space-y-1">
                                <li>
                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Link</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-1 transition rounded-md hover:bg-gray-100">Another
                                        Link</a>
                                </li>
                            </ul>
                            <div class="flex items-center justify-center p-4 text-blue-700  border-t">
                                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900 relative">
                                    dad
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="flex h-full" style=" background: #EAF2F840">

            <!-- Sidebar -->
            <aside x-transition:enter="transition transform duration-300"
                x-transition:enter-start="-translate-x-full opacity-30  ease-in"
                x-transition:enter-end="translate-x-0 opacity-100 ease-out"
                x-transition:leave="transition transform duration-300"
                x-transition:leave-start="translate-x-0 opacity-100 ease-out"
                x-transition:leave-end="-translate-x-full opacity-0 ease-in"
                class="fixed inset-y-0 z-10 flex-none flex flex-col flex-shrink-0 w-2/3 sm:w-5/12 md:w-4/12 lg:w-3/12 xl:w-2/12 max-h-screen overflow-hidden transition-all transform bg-white lg:bg-gray-50 shadow-lg lg:z-auto lg:static lg:shadow-none"
                :class="{'-translate-x-full lg:translate-x-0 lg:w-1/12': !isSidebarOpen}">
                <!-- sidebar header -->
                <div class="flex items-center justify-between flex-shrink-0 p-2"
                    :class="{'lg:justify-center': !isSidebarOpen}">
                    <span class="flex items-center py-2  uppercase lg:hidden">
                        <img src="{{ asset('images/logo3.png') }}" width="75" height="auto" alt="PetsWeb" srcset="">
                        <h1 class="text-sm md:text-md lg:text-lg font-bold ml-2 text-yellow-500">Admin</h1>
                    </span>
                    <div class="flex"></div>
                    <button @click="isSidebarOpen = !isSidebarOpen" class="p-2 rounded-md lg:hidden">
                        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Sidebar links -->
                <nav class="flex-1 overscroll-auto hover:overflow-y-auto">
                    <ul class="p-2 overflow-hidden">
                        <li>
                            <a href="{{ route('admin') }}"
                                class="flex justify-center mb-2 items-center p-2 space-x-2 rounded-md bg-yellow-400 text-white hover:bg-yellow-500 font-bold transition-all uppercase shadow-xl">
                                <img src="{{ asset('icons/admin/panel.ico') }}" width="40" height="auto" />
                                <span class="md:text-sm">Dashboard</span>
                            </a>
                            <a href="{{ route('pets-admin') }}"
                                class="flex justify-center my-2 items-center p-3 space-x-2 rounded-md hover:bg-gray-100 font-bold uppercase">
                                <img src="{{ asset('icons/admin/pets.svg') }}" width="40" height="auto" />
                                <span class="md:text-sm">Mascotas</span>
                            </a>
                            <a href="{{ route('gender-admin') }}"
                                class="flex justify-center my-2 items-center p-3 space-x-2 rounded-md hover:bg-gray-100 font-bold uppercase">
                                <img src="{{ asset('icons/admin/pets.svg') }}" width="40" height="auto" />
                                <span class="md:text-sm">Generos</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <!-- Main content -->
            <main class="max-h-full overflow-y-scroll w-full">
                <div class="mb-20">
                    <!-- Start Content -->
                    @yield('content')
                </div>
            </main>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script>
    const setup = () => {
        return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
        }
    }
    </script>

    @yield('scripts')
</body>

</html>