@extends('layouts.nav_user')

@section('content')
<div class="py-16 bg-yellow-200">
  <div class="container m-auto px-6">

   <div class="lg:flex justify-between items-center">
       <div class="lg:w-6/12 lg:p-0 p-7">
          <h1 class="text-4xl font-bold leading-tight mb-5 capitalize">Acerca de nosotros</h1>
          <p class="text-xl">Somos una empresa completamente profesional y dedicada al cuidado de su mascota en ausencia de su dueño, brindandole un servicio de calidad que pueda ser de mucha ayuda en todo momento que se requiera, tenemos como proposito especial, brindar todo el cuidado, atencion y amor que merece su mascota durante el tiempo que se encuentre con nosotros logrando mantener a su mascota comoda y con la confianza que tiene como si estuviera con su dueño, por lo que estamos seguros de que somos su mejor opcion.</p>
        </div>
        <div class="lg:w-5/12 order-2">
          <img src="images/img_6.jpg"
           alt="" class="rounded">
        </div>
    </div>

  </div>
</div>


    <section class="w-full mx-auto px-4 sm:px-6 lg:px-4 py-12 bg-blue-100">
        <div class="text-center pb-12">
            <h2 class="text-base font-bold text-black text-2xl">
               Contribuyentes
            </h2>
            <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
               EMPLEADOS CON BUENA PREPARACION
            </h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-40 w-40" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-3xl text-black font-bold mb-2">Salvador Centeno Tellez</p>
                    <p class="text-2xl text-gray-600 font-normal">Software Engineer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-40 w-40" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-3xl text-black font-bold mb-2">Rogelio Hernandez Martinez</p>
                    <p class=" text-2xl text-gray-400 font-normal">Graphic Designer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-40 w-40" src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-3xl text-black font-bold mb-2">Gustavo Hernandez Hidalgo</p>
                    <p class=" text-2xl text-gray-400 font-normal">Dev Ops</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-40 w-40" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-3xl text-black font-bold mb-2">Gabriel Martinez Camacho</p>
                    <p class=" text-2xl text-gray-400 font-normal">Software Engineer</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-lg p-12 flex flex-col justify-center items-center">
                <div class="mb-8">
                    <img class="object-center object-cover rounded-full h-40 w-40" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="photo">
                </div>
                <div class="text-center">
                    <p class="text-3xl text-black font-bold mb-2">Cristhian de la Cruz Martinez</p>
                    <p class=" text-2xl text-gray-400 font-normal">Graphic Designer</p>
                </div>
            </div>
        </div>
    </section>
@endsection