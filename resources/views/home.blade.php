@extends('layouts.nav_user')


@section('content')

<header>
      <div class="sliderAx h-auto">
            <div id="slider-1" class="mx-auto">
              <div class="bg-cover bg-center  h-full text-white py-80 px-10 object-fill" style="background-image: url(images/fondo_1.jpg);">
                <div class="md:w-1/2">
                  <p class="font-bold text-sm uppercase">Servicios de primera</p>
                  <p class="text-3xl font-bold">Bienvenidos</p>
                  <p class="text-2xl mb-10 leading-none">Conoce mas acerca de nosotros</p>
                  <a href="#" class="bg-yellow-500 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-black">Ver mas</a>
                </div>  
             </div> <!-- container -->
              <br>
            </div>

            <div id="slider-2" class="mx-auto">
            <div class="bg-cover bg-top  h-full text-white py-80 px-10 object-fill" style="background-image: url(images/img_5.jpg)">
            
              <p class="font-bold text-sm uppercase"></p>
              <p class="text-3xl font-bold">Cuidado de tus Mascotas</p>
              <p class="text-2xl mb-10 leading-none">Sientete seguro con nuestro trabajo</p>
              <a href="#" class="bg-yellow-500 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-black">Contactanos</a>
              
            </div> <!-- container -->
            <br>
            </div>
          </div>
         <div  class="flex justify-between w-12 mx-auto pb-2">
              <button id="sButton1" onclick="sliderButton1()" class="bg-gray-400 rounded-full w-4 pb-2 " ></button>
          <button id="sButton2" onclick="sliderButton2() " class="bg-gray-400 rounded-full w-4 p-2"></button>
         </div>
      </div>

</header>

<body>
   
      <div class="grid justify-items-center my-5 mt-60">
          <img src="data:image/png;base64,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" class="w-20 h-20 p-2">
          <h1 class="text-black text-center font-black text-3xl">
          NUESTROS LEMAS
          </h1>
      </div>
     
       
    <section class=" text-gray-200 grid justify-items-center mb-20">
      <div class="w-full py-38">
        <div class="grid grid-cols-1 sm:grid-cols-3 text-center ">

      
        <div class="bg-yellow-500 px-10 py-8 rounded-lg shadow-2xl text-center m-4 my-8">
          <div class="mb-3">
            <img
              class="w-72 mx-auto rounded-full bg-white"
              src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/icon1.png"
              alt=""
            />
          </div>
          <h2 class="font-medium text-white text-2xl sm:text-2xl md:text-3xl">Lo mas importante es la proteccion de su mascota</h2>
        </div>

        <div class="bg-yellow-500 px-10 py-8 rounded-lg shadow-2xl text-center m-4 my-0">
          <div class="mb-3">
            <img
              class="w-72 mx-auto rounded-full bg-white"
              src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/icon2.png"
              alt=""
            />
          </div>
          <h2 class="font-medium text-white text-2xl sm:text-2xl md:text-3xl">La felicidad de su mascota es nuestra felicidad</h2>
        </div>
        
        <div class="bg-yellow-500 px-10 py-8 rounded-lg shadow-2xl text-center m-4 my-8">
          <div class="mb-3">
            <img
              class="w-72 mx-auto rounded-full bg-white"
              src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/icon3.png"
              alt=""
            />
          </div>
          <h2 class="font-medium text-white text-2xl sm:text-2xl md:text-3xl">Satisfaccion garantizada para su mascota</h2>
        </div>
   



        </div>
      </div>
    </section>

    <section class="text-blueGray-700 bg-white mt-20">
        <div class="container flex flex-col items-center px-5 py-16 w-full md:flex-row lg:px-28 shadow-2xl">
            <div class="flex flex-col items-start mb-16 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
                <h2 class="mb-8 text-xs font-semibold tracking-widest text-black uppercase title-font">Responsabilidad ante todo</h2>
                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font"> ¿QUIERES INFORMACION? </h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 ">Tendras la confianza de dejarnos a tu mascota sabiendo que sera tratado de la mejor manera, brindandole un servicio de primera y la atencion que se merece, cumpliendo con la satisfaccion tanto del cliente como de su mascota.</p>
                <div class="flex flex-col justify-center lg:flex-row">
                    <button class="flex items-center px-6 py-2 mt-auto font-semibold text-white hover:text-black transition duration-500 ease-in-out transform bg-yellow-500 rounded-lg hover:bg-gray-200 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"> Ver</button>
                </div>
            </div>
            <div class="w-full lg:w-1/3 lg:max-w-lg md:w-1/2">
                <img class="object-cover object-center rounded-lg " alt="hero" src="https://www.nationalgeographic.com.es/medio/2019/09/09/bull-dog-ingles_043b09e1_800x800.jpg">
            </div>
        </div>
    </section>
   
      <div class="grid justify-items-center my-5 mt-60">
          <img src="data:image/png;base64,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" class="w-20 h-20 p-2">
          <h1 class="text-black text-center font-black text-3xl">
            MASCOTAS Y CLIENTES
          </h1>
      </div>
      <section class=" text-gray-200 grid justify-items-center ">
      <div class="max-w-max px-8 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-3 text-center ">
          
        <div class="bg-yellow-500 px-10 py-8 rounded-lg shadow-2xl text-center m-4 my-8">
          <div class="mb-3">
            <img
              class="w-72 mx-auto rounded-full bg-white"
              src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/pg.png"
              alt=""
            />
          </div>
          <h2 class="font-medium text-white text-2xl sm:text-2xl md:text-3xl">Mascotas registradas en la pagina</h2>
          <span class="text-white font-bold text-5xl block mt-2">2</span>
        </div>

        <div class="bg-yellow-500 px-10 py-8 rounded-lg shadow-2xl text-center m-4 my-0">
          <div class="mb-3">
            <img
              class="w-72 mx-auto rounded-full bg-white"
              src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/casaperro.png"
              alt=""
            />
          </div>
          <h2 class="font-medium text-white text-2xl sm:text-2xl md:text-3xl">Espacios libre para hospedaje</h2>
          <span class="text-white font-bold text-5xl block mt-2">20/20</span>
        </div>
        
        <div class="bg-yellow-500 px-10 py-8 rounded-lg shadow-2xl text-center m-4 my-8">
          <div class="mb-3">
            <img
              class="w-72 mx-auto rounded-full bg-white"
              src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/muchacha.png"
              alt=""
            />
          </div>
          <h2 class="font-medium text-white text-2xl sm:text-2xl md:text-3xl">Usuarios registrados en la pagina</h2>
          <span class="text-white font-bold text-5xl block mt-2">7</span>
        </div>


        </div>
      </div>
    </section>   
    <section class="text-blueGray-700 bg-white mt-20 flex justify-end">
        <div class="container flex flex-col items-center px-5 py-16 w-full md:flex-row lg:px-28 shadow-2xl">
            <div class="w-full lg:w-1/3 lg:max-w-lg ">
                <img class="object-cover object-center rounded-lg " alt="hero" src="images/img_4.jpg">
            </div>
            <div class="flex flex-col items-start ml-36 text-left lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:mb-0">
                <h1 class="mb-8 text-2xl font-black tracking-tighter text-black md:text-5xl title-font"> Conoce los servicios que tenemos para tu mascota.</h1>
                <p class="mb-8 text-base leading-relaxed text-left text-blueGray-600 ">Tu mascota se sentira como en casa con los comodos servicios que ofrecemos.</p>
                <div class="flex flex-col justify-center lg:flex-row">
                    <button class="flex items-center px-6 py-2 mt-auto font-semibold text-white hover:text-black transition duration-500 ease-in-out transform bg-yellow-500 rounded-lg hover:bg-gray-200 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2"> Ver</button>
                </div>
            </div>
        </div>
    </section>
  

   
    <div class="grid justify-items-center p-8 my-32">
        <div class="grid grid-cols-1 md:grid-cols-2 p-4">
          
            <h1 class="text-6xl font-black text-blue-600 mr-6 mb-6 sm:my-8 mb-12">
            Somos tu mejor opcion
            </h1>
         
            <h1 class="text-6xl font-black text-blue-600">
            Sientete seguro de dejar a tu mascota con nostros
            </h1>
         
        </div>
    </div>

@endsection

