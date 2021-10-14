
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('sign-up', require('./components/auth/SignUp.vue'));

Vue.component('home-admin', require('./components/admin/HomeAdmin.vue'));

Vue.component('pet-table', require('./components/admin/Pets/Table.vue'));
Vue.component('pet-register', require('./components/admin/Pets/Register.vue'));
Vue.component('pet-edit', require('./components/admin/Pets/Edit.vue'));

const app = new Vue({
    el: '#app'
});
