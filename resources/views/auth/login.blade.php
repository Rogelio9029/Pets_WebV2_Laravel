@extends('layouts.nav_user')

@section('content')
<div class="min-w-screen md:min-h-screen flex items-center justify-center px-2 py-2 h-96">
        <div class="bg-white text-gray-500 rounded-xl shadow-2xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">
                
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                    <div class="text-center mb-5">
                        <h1 class="font-bold text-3xl text-gray-900">INGRESAR</h1>
                    </div>
                    <div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1">Correo electronico</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                    <input type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="johnsmith@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-12">
                                <label for="" class="text-xs font-semibold px-1">Contraseña</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                    <input type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">ENTRAR</button>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('images/SignIn.jpg') }}" resizeMode = 'cover'  class="hidden md:block w-1/2 h-screen" srcset="">
            </div>
        </div>
    </div>
@endsection
