@extends('layouts.nav_user')

@section('content')


<div class="relative w-full min-h-screen bg-white text-black">
<h1 class="text-4xl p-4 font-bold tracking-wide">
    Contactanos
</h1>
<div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-yellow-500 h-32 w-full"></div>

<!-- wrapper -->
<div class="relative p-5 lg:px-20 flex flex-col md:flex-row items-center justify-center">

    <!-- Social Media -->
    <div class="w-full md:w-1/2 p-5 md:px-0 mx-5">
    <div class="bg-white w-full lg:w-1/2 h-full p-5 pt-8 shadow-2xl">
        <h3 class="text-2xl font-semibold mb-5">
        Nuestras redes sociales
        </h3>   
        <!-- list -->
        <div class="flex flex-col gap-3">
      
        <a href="https://www.facebook.com/serv.petsweb/" class="flex items-center hover:text-white hover:bg-yellow-500 p-2">
            <img src="iconsRedes/facebook.png" alt="" class="w-6 h-6 m-2 hover:bg-white" > 
            <path d="M 21.800781 0 L 2.199219 0 C 1 0 0 1 0 2.199219 L 0 21.800781 C 0 23 1 24 2.199219 24 L 21.800781 24 C 23 24 24 23 24 21.800781 L 24 2.199219 C 24 1 23 0 21.800781 0 Z M 7 20 L 3 20 L 3 9 L 7 9 Z M 5 7.699219 C 3.800781 7.699219 3 6.898438 3 5.898438 C 3 4.800781 3.800781 4 5 4 C 6.199219 4 7 4.800781 7 5.800781 C 7 6.898438 6.199219 7.699219 5 7.699219 Z M 21 20 L 17 20 L 17 14 C 17 12.398438 15.898438 12 15.601563 12 C 15.300781 12 14 12.199219 14 14 C 14 14.199219 14 20 14 20 L 10 20 L 10 9 L 14 9 L 14 10.601563 C 14.601563 9.699219 15.601563 9 17.5 9 C 19.398438 9 21 10.5 21 14 Z"/>
            </svg>
            Facebook
        </a>
        <a href="https://twitter.com/PetsWeb1" class="flex items-center hover:text-white hover:bg-yellow-500 p-2">
            <img src="iconsRedes/twitter.png" alt="" class="w-6 h-6 m-2" > 
            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
            </svg>
            Twitter
        </a>
        <a href="https://www.instagram.com/servpetsweb/?hl=es" class="flex items-center hover:text-white hover:bg-yellow-500 p-2">
            <img src="iconsRedes/instagram.png" alt="" class="w-6 h-6 m-2" > 
            <path d="M12,0C5.373,0,0,5.373,0,12c0,6.016,4.432,10.984,10.206,11.852V15.18H7.237v-3.154h2.969V9.927c0-3.475,1.693-5,4.581-5 c1.383,0,2.115,0.103,2.461,0.149v2.753h-1.97c-1.226,0-1.654,1.163-1.654,2.473v1.724h3.593L16.73,15.18h-3.106v8.697 C19.481,23.083,24,18.075,24,12C24,5.373,18.627,0,12,0z"/>
            </svg>
            Instagram
        </a>
        </div>
    </div>
    </div>

    <!-- Contact Me -->
    <form action="#" class="w-full md:w-1/2 p-6 bg-white shadow-2xl">
    <h2 class="text-2xl pb-3 font-semibold">
        Enviar Mensaje
    </h2>
    <div>
        <div class="flex flex-col mb-3">
        <label for="name">Nombre</label>
        <input 
            type="text" id="name" 
            class="px-3 py-2 bg-white border border-gray-900 focus:border-blue-800 focus:outline-none focus:bg-blue-100 focus:text-black rounded-2xl"
            autocomplete="off"
        >
        </div>
        <div class="flex flex-col mb-3">
        <label for="email">Correo Electronico</label>
        <input 
            type="text" id="email" 
            class="px-3 py-2 bg-white border border-gray-900 focus:border-blue-800 focus:outline-none focus:bg-blue-100 focus:text-black rounded-2xl"
            autocomplete="off"
        >
        </div>
        <div class="flex flex-col mb-3">
        <label for="message">Message</label>
        <textarea 
            rows="4" id="message" 
            class="px-3 py-2 bg-white border border-gray-900 focus:border-blue-800 focus:outline-none focus:bg-blue-100 focus:text-black rounded-2xl"
        ></textarea>
        </div>
    </div>
    <div class="w-full pt-3">
        <button type="submit" class="w-full bg-blue-500 px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-blue-200 hover:text-black text-xl cursor-pointer text-white rounded-2xl">
         Enviar
        </button>
    </div>
    </form>
</div>
</div>

@endsection