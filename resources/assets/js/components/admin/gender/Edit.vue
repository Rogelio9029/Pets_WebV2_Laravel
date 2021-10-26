<template>
    <div>
       <div class="w-full p-5 flex text-gray-500 font-medium">
            <a href="/gender-admin" class="mx-1 hover:text-yellow-700 flex items-center ease-out transition-all duration-75">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                </svg>
                Generos
            </a>
            <h1>/</h1>
            <p class="mx-1 hover:cursor-pointer">Registrar genero</p>
       </div>
       <div class="">
           <form action @submit.prevent="handleGenderUpdate()">
                <div class="min-w-screen flex items-center justify-center px-5 py-5">
                    <div class="bg-blueGray-50 text-gray-500 rounded-lg shadow-xl w-full overflow-hidden lg:w-5/6 xl:2/3" style="max-width:1000px">
                        <div class="w-full">
                            <div class="text-center  bg-white py-6">
                                <h1 class="md:text-5xl font-bold leading-tight text-3xl text-black">Registrar genero</h1>
                            </div>
                            <div class="px-6 py-10">
                                <div class="flex">
                                    <div class="w-full px-3 mb-5">
                                        <label for="" class="text-md font-semibold px-2">Genero</label>
                                        <div class="flex mt-1">
                                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>
                                            <input type="text" v-model="gender.gender" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500 ease-linear transition-all duration-200" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-5">
                                        <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGISTER NOW</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
       </div>
    </div>
</template>

<script>
    import { swalMixin, swalDialog, swalBasic } from '../../../sweetalert/sweetAlert';

    export default {
        mounted() {
            const id = window.location.pathname.replace(/\D/g,'');           
            ((async () => {
                try {
                    const { data, status } = await axios.get(`/api/gender/${ id }`);
                    if (status != 200) throw new Error('Fallo la peticion');
                    this.gender = data.gender;
                    this.isLoading = false;
                } catch (e) {
                    this.isLoading = false;
                    this.isError = true;
                    swalMixin('error', e);
                }
            })());
        },
        data() {
            return {
                isLoading: true,
                isError: false,
                gender: {}
            }
        },
        methods: {
            async handleGenderUpdate() {
                // try {
                    const response = await axios.put(`/api/gender/${this.gender.id}`, this.gender);
                    return console.log(response)
                    if (status != 200) throw new Error('Error al eliminar');
                    swalBasic('Eliminado!', `Se elimino correctamente el registo: ${gender.gender}`, 'success');
                // } catch (e) {
                //     swalMixin('error', e);
                // }
            }
        }
    }
</script>
