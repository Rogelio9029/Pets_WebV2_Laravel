<template>
    <div>
        <router-link to="/" >Home</router-link>
        <router-link to="/users" >Users</router-link>
        <router-link to="/user/1" >User 1</router-link>
        <router-view></router-view>
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
