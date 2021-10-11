<template>
    <div>
        <div class="grid grid-cols-1 gap-5 sm:gap-x-3 sm:gap-y-5 md:grid-cols-2 lg:grid-cols-3">
            <div
                class="p-4 transition-shadow border-dashed border-2 rounded-lg shadow-sm hover:shadow-xl hover:border-transparent bg-white">
                <div class="flex items-start justify-between">
                    <div class="flex flex-col space-y-2">
                        <span class="text-gray-400">Total Users</span>
                        <span class="text-lg font-semibold">100,221</span>
                    </div>
                    <div class="p-10 bg-gray-200 rounded-md"></div>
                </div>
                <div>
                    <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
                    <span>from 2019</span>
                </div>
            </div>
        </div>
        <div class="my-5">
            <h3 class="text-xl">Users</h3>
            <table class="min-w-full overflow-x-scroll divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Name
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <h1>Hola a todos</h1>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="bg-green-200 p-6 m-5"></div>
        <div class="bg-green-200 p-6 m-5"></div>
        <div class="bg-green-200 p-6 m-5"></div>
        <div class="bg-green-200 p-6 m-5"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted home admin')
        },
        data() {
            return {
                
            }
        }
    }
</script>
