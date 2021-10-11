<template>
    <div>
        <div class="flex flex-wrap py-2 items-center justify-between">
            <h1 class="md:text-5xl font-bold leading-tight text-3xl">Tabla de mascotas</h1>
            <button 
                class="flex p-2 bg-red-500 rounded-full text-white lg:rounded-md lg:py-2 focus:outline-none focus:ring focus:ring-red-400 uppercase ring-offset-1 font-bold transition">
                <svg class="w-6 h-6 lg:pr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
                <h1 class="hidden lg:flex">AGREGAR</h1>
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted pets')
        },
        data() {
            return {
                
            }
        }
    }
</script>
