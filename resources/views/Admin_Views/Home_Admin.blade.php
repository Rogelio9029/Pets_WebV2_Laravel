<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-600">
    <div class="bg-white flex p-4 shadow-sm ">
       <h6 class="flex-grow text-9xl font-bold text-black">PET'S WEB</h6>
       <div class="self-center grid justify-items-end">
        <h4 class="font-black">Administrador:</h4>
        <P class="text-4xl font-black">Salvador Centeno Tellez</P>
        <a href=""> <img src="icons/cog.svg"></a>
       
       </div>
     
    </div>
    <h6 class="flex justify-center text-6xl font-black text-black h-50 text-white">PANEL ADMINISTRADOR</h6>
    <div class="flex h-screen bg-white">
       <div class="p-7 border-r w-100 border-blue-300 bg-blue-600 ">
           <h6 class="text-4xl font-black mb-11 italic text-white">USUARIO-ADMIN</h6>
           <ul>
               <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/briefcase.svg"> 
                </div>  
                <a href="" class="self-center text-white text-3xl hover:text-white">Personal</a>
               </li>
               <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/users.svg"> 
                </div>  
                <a href="" class="self-center text-white text-3xl hover:text-white">Clientes</a>
               </li>
               <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/star.svg"> 
                </div>  
                <a href="" class="self-center text-white text-3xl hover:text-white">Mascotas</a>
               </li>
              
           </ul>
           <h6 class="text-4xl font-black mb-11 italic text-white">SERVICIOS</h6>
           <ul>
           <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/duplicate.svg"> 
                </div>  
                <a href="" class="self-center text-white text-3xl hover:text-white">Servicios</a> 
               </li>
               <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/currency-dollar.svg"> 
                </div>  
                <a href="" class="self-center text-white text-3xl hover:text-white">Planes</a>
               </li>
           </ul>
           <h6 class="text-4xl font-black mb-11 italic text-white">IMPORTANTE</h6>
           <ul>
           <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/clipboard-list.svg"> 
                </div> 
                <a href="" class="self-center text-white text-3xl hover:text-white">Agenda</a> 
               </li>
               <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/chat-alt-2.svg"> 
                </div>  
                <a href="" class="self-center text-white text-3xl hover:text-white">Mensajes</a>
               </li>
               <li class="flex mb-10">
                <div class="bg-blue-100 shadow-sm p-2 mr-3 rounded-lg">
                  <img src="icons/document-report.svg"> 
                </div>  
                <a href="" class="self-center text-white text-3xl hover:text-white">Reportes</a>
               </li>
               <br><br>
               <h6><a href="" class="text-4xl font-black mb-11 italic text-white hover:text-white">VOLVER</a> </h6>
             
           </ul>
            
           
       </div>
       <div class="p-10">
            <h1>Contenido</h1>
       </div>
    </div>
     
  

    
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>
