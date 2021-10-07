<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('icons/logo.ico') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body id="app" class="">
        
        <div class="relative bg-white">
            <div class="max-w-7xl mx-auto">
                <div 
                    x-data="{menu: true}"
                    class="flex justify-between items-center border-b-2 border-gray-100 
                    py-4 px-4 ms:justify-center xl:space-x-10"
                >
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="{{ route('/') }}">
                            <p class="font-bold text-3xl relative w-max nav">
                                <span>PetsWeb</span>
                                <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-yellow-400"></span>
                            </p>
                        </a>
                    </div>
                    <div class="-mr-2 -my-2 xl:hidden">
                        <button type="button"
                            @click="menu = !menu" 
                            class="bg-white rounded-md p-2 inline-flex items-center 
                            justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 
                            focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" 
                            aria-expanded="false"
                        >
                            <span class="sr-only">Open menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" 
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden xl:flex space-x-10">
                        <!-- <div x-data="{solutions: false}" class="relative">
                            <button type="button" class="text-gray-500 group px-2 bg-white inline-flex items-center text-base font-medium hover:text-gray-900" 
                                aria-expanded="false"
                                @click="solutions = !solutions"
                                @mousedown="if (open) $event.preventDefault()"
                            >
                                <p class="nav">
                                    <span>PetsWeb</span>
                                    <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-yellow-400"></span>
                                </p>
                                <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="solutions" class="absolute z-10 -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                            >
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                                        <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                                            <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                            <div class="ml-4">
                                                <p class="text-base font-medium text-gray-900">
                                                    Analytics
                                                </p>
                                                <p class="mt-1 text-sm text-gray-500">
                                                    Get a better understanding of where your traffic is coming from.
                                                </p>
                                            </div>
                                        </a>                            
                                    </div>
                                    <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">
                                        <div class="flow-root">
                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                <span class="ml-3">Watch Demo</span>
                                            </a>
                                        </div>

                                        <div class="flow-root">
                                            <a href="#" class="-m-3 p-3 flex items-center rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">
                                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                                <span class="ml-3">Contact Sales</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900 relative">
                            <p class="nav px-2">
                                <span>Servicios</span>
                                <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-yellow-400"></span>
                            </p>
                        </a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900 relative">
                            <p class="nav px-2">
                                <span>Contactanos</span>
                                <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-yellow-400"></span>
                            </p>
                        </a>
                        <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900 relative">
                            <p class="nav px-2">
                                <span>Nosotros</span>
                                <span class="absolute -bottom-1 left-0 w-0 transition-all h-1 bg-yellow-400"></span>
                            </p>
                        </a>
                        <div x-data="{search: false}" class="relative">
                            <button 
                                type="button" 
                                class="text-gray-500 group px-2 bg-white inline-flex items-center text-base font-medium hover:text-gray-900 border-b-4 border-white" 
                                aria-expanded="false"
                                @click="search = !search"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                            <div x-show="search" @click="search = false" class="fixed inset-0 h-full w-full z-10"></div>
                            <div x-show="search" class="absolute z-10 left-1/2 transform -translate-x-1/2 mt-3 px-2 max-w-md sm:px-0"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 translate-y-1"
                            >
                                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                    <div class="relative flex justify-center bg-white p-5">
                                        <input class="bg-gray-50 outline-none p-4 rounded-tl-lg rounded-bl-lg" type="text" placeholder="Que vamos buscar hoy" />
                                        <button 
                                            type="button" 
                                            class="text-white rounded-tr-lg rounded-br-lg px-4 bg-yellow-300 text-base font-medium hover:text-black" 
                                            aria-expanded="false"
                                            @click="alert(2)"
                                        >  
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <div class="hidden xl:flex items-center justify-end md:flex-1 lg:w-0">
                        @guest
                            <a href="{{ route('login') }}" class="font-bold text-yellow-500 px-5 py-3 text-xl">
                                Sign In
                            </a>
                            <a href="{{ route('register') }}" 
                                class="bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 flex items-center mx-2 px-5 py-3 rounded-lg
                                text-white font-bold focus:outline-none border-4 border-white focus:border-purple-200 transition-all"
                            >
                                Sign Up
                            </a>
                        @else
                            <a href="home" class="font-bold text-yellow-500 px-5 py-3 text-xl">
                                {{ Auth::user()->name }}
                            </a>
                            <a href="{{ route('logout') }}" 
                                class="bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 flex items-center mx-2 px-5 py-3 rounded-lg
                                text-white font-bold focus:outline-none border-4 border-white focus:border-purple-200 transition-all"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            >
                                LogOut
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>

                    <div x-show="menu" class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right xl:hidden"
                        x-transition:enter="duration-200 ease-out"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="duration-100 ease-in"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                    >
                        <!-- <div x-show="menu" @click="menu = false" class="fixed inset-0 h-full w-full z-10"></div> -->
                        <div class="rounded-lg shadow-xl ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                            <div class="pt-5 pb-6 px-5 space-y-6">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <!-- <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow"> -->
                                        <p class="font-bold text-3xl relative w-max nav">
                                            <span>PetsWeb</span>
                                        </p>
                                    </div>
                                    <div class="-mr-2">
                                        <button 
                                            type="button" 
                                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 
                                                hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset 
                                                focus:ring-indigo-500"
                                            @click="menu = !menu"
                                        >
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <nav class="grid gap-y-4">
                                        <a href="#" class="p-3 flex items-center rounded-md hover:bg-gray-100">
                                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                            <span class="ml-3 text-base font-medium text-gray-900">
                                                Servicios
                                            </span>
                                        </a>
                                        <a href="#" class="p-3 flex items-center rounded-md hover:bg-gray-100">
                                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                            </svg>
                                            <span class="ml-3 text-base font-medium text-gray-900">
                                                Contactos
                                            </span>
                                        </a>
                                        <a href="#" class="p-3 flex items-center rounded-md hover:bg-gray-100">
                                            <svg class="flex-shrink-0 h-6 w-6 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                            </svg>
                                            <span class="ml-3 text-base font-medium text-gray-900">
                                                Nosotros
                                            </span>
           
                                        </a>
                                    </nav>
                                </div>
                            </div>

                            <div class="flex justify-center bg-white p-5">
                                <input class="w-2/3 bg-gray-50 outline-none p-4 rounded-tl-lg rounded-bl-lg" type="text" placeholder="Que vamos buscar hoy" />
                                <button 
                                    type="button" 
                                    class="flex w-2/12 text-white rounded-tr-lg rounded-br-lg px-4 bg-yellow-300 text-base justify-center items-center font-medium hover:text-black" 
                                    aria-expanded="false"
                                    @click="alert(2)"
                                >  
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </button>
                            </div>
                            
                            <a href="#" class="bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 mx-5 flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-lg font-bold text-white">
                                Sign up
                            </a>
                            <p class="mt-6 py-4 text-center text-lg font-medium text-gray-500">
                                Ya tienes una cuenta?
                                <a href="#" class="text-yellow-500 hover:text-yellow-500">
                                    Sign in
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        @yield('content')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        @yield('scripts')

        <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer
        ></script>

    </body>
</html>
