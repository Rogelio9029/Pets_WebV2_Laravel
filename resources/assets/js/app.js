require('./bootstrap');

window.Vue = require('vue');

Vue.component('App', require('./components/App'));

Vue.component('sign-up', require('./components/auth/SignUp.vue'));

Vue.component('home-admin', require('./components/admin/HomeAdmin.vue'));

Vue.component('pet-table', require('./components/admin/pet/Table.vue'));
Vue.component('pet-register', require('./components/admin/pet/Register.vue'));
Vue.component('pet-edit', require('./components/admin/pet/Edit.vue'));

Vue.component('gender-table', require('./components/admin/gender/Table.vue'));
Vue.component('gender-register', require('./components/admin/gender/Register.vue'));
Vue.component('gender-edit', require('./components/admin/gender/Edit.vue'));

import router from './router';

const app = new Vue({
    el: '#app',
    router
});
