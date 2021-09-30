<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet's Web</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<header>
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="flex items-center justify-between">
                    <div class="text-xl font-semibold text-gray-700 mr-10">
                        <a class="text-2xl font-bold text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="#">PET'S WEB</a>
                    </div>

                    <a href="#" class="block mx-4 mt-2 text-md text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Inicio</a>
                    <a href="#" class="block mx-4 mt-2 text-md text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Servicios</a>
                    <a href="#" class="block mx-4 mt-2 text-md text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Contactanos</a>
                    <a href="#" class="block mx-4 mt-2 text-md text-gray-700 capitalize lg:mt-0 dark:text-gray-200 hover:text-blue-600 dark:hover:text-indigo-400">Nosotros</a>
               
                </div>
            </div>
        </div>
    </nav>

    <div class="w-full bg-center bg-cover h-96" style="background-image: url(https://cdn.pixabay.com/photo/2015/07/09/19/32/dog-838281__340.jpg);">
        <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-50">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-white uppercase lg:text-3xl font-black">CONOCENOS MAS</h1>
                <button class="w-full px-4 py-2 mt-4 text-sm font-medium text-white uppercase transition-colors duration-200 transform bg-blue-600 rounded-md lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Ver mas</button>
            </div>
        </div>
    </div>
</header>

<body>
   
      <div class="grid justify-items-center">
          <img src="data:image/png;base64,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" class="w-20 h-20 p-2">
          <h1 class="text-black text-center font-black">
          NUESTROS LEMAS
          </h1>
      </div>
     
       
    <section class=" text-gray-200 bg-gray-900 grid justify-items-center ">
      <div class="max-w-6xl mx-full px-5 py-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 text-center">
          
          <div class="xl:w-30 md:w-30 p-4">
            <div class="border border-gray-300 p-6 rounded-lg grid justify-items-center">
              <img src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/icon1.png" class="rounded-lg bg-white w-40 h-40">
              <h2 class="text-lg  font-medium title-font mb-2">Lo mas importante es la proteccion de su mascota</h2>
             
            </div>
          </div>

          <div class="xl:w-30 md:w-30 p-4">
            <div class="border border-gray-300 p-6 rounded-lg grid justify-items-center">
            <img src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/icon2.png" class="rounded-lg bg-white w-40 h-40">
              <h2 class="text-lg  font-medium title-font mb-2">La felicidad de su mascota es nuestra felicidad</h2>
             

            </div>
          </div>
          <div class="xl:w-30 md:w-30 p-4">
            <div class="border border-gray-300 p-6 rounded-lg grid justify-items-center">
              <img src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/icon3.png" class="rounded-lg bg-white w-40 h-40">
              <h2 class="text-lg  font-medium title-font mb-2">Satisfaccion garantizada para su mascota</h2>
            </div>
            
          </div>
        </div>
      </div>
    </section>

      <div class="grid justify-items-center grid-cols-1 sm:grid-cols-1 container p-8">
          <img src="data:image/png;base64,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" class="w-20 h-20 mb-1">
          <h1 class="text-black text-center font-black">
              ¿QUIERES INFORMACION?
          </h1>
          <p class="text-2xl text-center text-black">Tendras la confianza de dejarnos a tu mascota sabiendo que sera tratado de la mejor manera, brindandole un servicio de primera y la atencion que se merece, cumpliendo con la satisfaccion tanto del cliente como de su mascota.</p>
      </div>
   
      <div class="grid justify-items-center">
          <img src="data:image/png;base64,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" class="w-20 h-20 p-2">
          <h1 class="text-black text-center font-black">
            MASCOTAS Y CLIENTES
          </h1>
      </div>
      <section class=" text-gray-200 bg-gray-900 grid justify-items-center ">
      <div class="max-w-6xl mx-full px-5 py-20">
        <div class="grid grid-cols-1 sm:grid-cols-3 text-center">
          
          <div class="xl:w-30 md:w-30 p-4">
            <div class="border border-gray-300 p-6 rounded-lg grid justify-items-center">
              <img src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/pg.png" class="rounded-lg bg-white w-40 h-40">
              <h2 class="text-lg  font-medium title-font mb-2">Mascotas registradas en la pagina:</h2>
              <p class="text-4xl font-black">1</p>
            </div>
          </div>

          <div class="xl:w-30 md:w-30 p-4">
            <div class="border border-gray-300 p-6 rounded-lg grid justify-items-center">
            <img src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/casaperro.png" class="rounded-lg bg-white w-40 h-40">
              <h2 class="text-lg  font-medium title-font mb-2">Espacios libre para hospedaje:</h2>
              <p class="text-4xl font-black">20/20</p>
            </div>
          </div>
          <div class="xl:w-30 md:w-30 p-4">
            <div class="border border-gray-300 p-6 rounded-lg grid justify-items-center">
              <img src="https://petsweb.tazpizza.com.mx/public/Public_design/Img/icons/muchacha.png" class="rounded-lg bg-white w-40 h-40">
              <h2 class="text-lg  font-medium title-font mb-2">Usuarios registrados en la pagina:</h2>
              <p class="text-4xl font-black">5</p>
            </div>
            
          </div>
        </div>
      </div>
    </section>  
    <div class="container p-8 ">
        <div class="grid grid-cols-1 md:grid-cols-2 justify-center">
          
            <h1 class="text-7xl font-black text-blue-500 mr-4">
            Somos tu mejor opcion
            </h1>
         
            <h1 class="text-7xl font-black text-blue-500">
            Sientete seguro de dejar a tu mascota con nostros
            </h1>
         
        </div>
    </div>
      

    <script src="{{ asset('js/app.js') }}" ></script>
</body>

<footer>
  <div class="bg-gray-900 p-8">
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <div class="sm:w-auto h-auto cols-span-4">
              <div class="text-white">Acerca de la empresa</div>
              <ul class="list-reset leading-normal">
                  <li class="hover:text-white">Una empresa que se ganara tu confianza demostrando su profesialismo</li>
              </ul>
            </div>
            <div class="sm:w-auto h-auto sm:mt-0 mt-8 mr-20">
              <div class="text-white mb-2">
                  Enlaces rapidos
              </div>
              <ul class="list-reset leading-normal">
                <li><a href="" class="list-reset leading-normal text-gray-500 hover:text-white">Servicios</a></li>
                <li><a href="" class="list-reset leading-normal text-gray-500 hover:text-white">Contactanos</a></li>
                <li><a href="" class="list-reset leading-normal text-gray-500 hover:text-white">Nosotros</a></li>
              </ul>
            </div>
            <div class="sm:w-1/4 h-auto sm:mt-0 mt-8 ">
              <div class="text-white mb-2">
                  Siguenos en:
              </div>
              <ul class="list-reset leading-normal">
                <li><a href="https://www.facebook.com/serv.petsweb/" class="list-reset leading-normal"><img src="iconsRedes/facebook.png" class="w-12 h-12 mb-5 hover:bg-white m-4"></a></li>
                <li><a href="https://twitter.com/PetsWeb1" class="list-reset leading-normal"><img src="iconsRedes/twitter.png" class="w-12 h-12 mb-5 m-4"></a></li>
                <li><a href="https://www.instagram.com/servpetsweb/?hl=es" class="list-reset leading-normal"><img src="iconsRedes/instagram.png" class="w-14 h-14 mb-5 m-4"></a></li>
              </ul>
            </div>
            <div class="sm:w-1/2 sm:mt-0 mt-8 h-auto">
                <div class="text-white mb-2"></div>
            </div>
    </div>
  </div>
</footer>
</html>
