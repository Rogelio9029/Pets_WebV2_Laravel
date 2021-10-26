<template>
    <div>
       <h1>hola</h1>
    </div>
</template>

<script>
var URLactual = window.location;
const urlParams = new URLSearchParams(URLactual)
    export default {
        mounted() {
            console.log(URLactual)
        },
        data() {
            return {
                isLoading: true,
                isError: false,
                gender: {}
            }
        }
    }
</script>
