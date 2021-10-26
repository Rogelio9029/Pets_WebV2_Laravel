<template>
    <div>
        <div class="flex flex-wrap py-2 items-center justify-between m-5">
            <h1 class="md:text-5xl font-bold leading-tight text-3xl">Tabla de generos</h1>
            <button 
                class="flex p-2 bg-red-500 rounded-full text-white lg:rounded-md lg:py-2 focus:outline-none focus:ring focus:ring-red-400 uppercase ring-offset-1 font-bold transition">
                <svg class="w-6 h-6 lg:pr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4" />
                </svg>
                <h1 class="hidden lg:flex">AGREGAR</h1>
            </button>
        </div>
        <div class="mt-5" v-if="isLoading">
            <p class="text-red-400 text-xl uppercase" >Loading...</p>
        </div>
        <div class="mt-5" v-else-if="isError">
            <p class="text-red-400 text-xl uppercase" >Fallo la peticion</p>
        </div>
        <div class="mt-5" v-else-if="genders.length < 1">
            <p class="text-red-400 text-xl uppercase" >No tiene ningun registro</p>
        </div>
        <div class="mt-10" v-else>
            <div class="flex flex-col">
                <div class="my-2 overflow-x-auto sm:mx-2">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            #ID
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Genero
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr v-for="(gender, index) in genders" :key="index">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ gender.id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ gender.gender }}
                                        </td>
                                        <td class="flex px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button @click="pushEdit(gender.id)" class="text-indigo-600 hover:text-indigo-900 mx-2">Edit</button>
                                            <button @click="deleteGender(gender)" class="text-red-600 hover:text-indigo-900 mx-2">Eliminar</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { swalMixin, swalDialog, swalBasic } from '../../../sweetalert/sweetAlert';

    export default {
        mounted() {
            ((async () => {
                this.getGenders();
            })());
        },
        data() {
            return {
                isLoading: true,
                isError: false,
                genders: [],
            }
        },
        methods: {
            async getGenders() {
                try {
                    const { data, status } = await axios.get('api/gender');
                    if (status != 200) throw new Error('Fallo la peticion');
                    this.genders = data;
                    this.isLoading = false;
                } catch (e) {
                    this.isLoading = false;
                    this.isError = true;
                    swalMixin('error', e);
                }
            },
            async deleteGender(gender) {
                const res = await swalDialog(`El campo con genero ${gender.gender}, se eliminara`);
                if(res){
                    try {
                        const { status } = await axios.delete(`api/gender/${gender.id}`);
                        if (status != 200) throw new Error('Error al eliminar');
                        this.getGenders();
                        swalBasic('Eliminado!', `Se elimino correctamente el registo: ${gender.gender}`, 'success');
                    } catch (e) {
                        swalMixin('error', e);
                    }
                }
            },
            pushEdit(id) {
                window.location = `gender-admin/${id}`;
            }
        }
    }
</script>
