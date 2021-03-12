/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.config.productionTip = false;

import VueRouter from 'vue-router';

Vue.use(VueRouter);



const routes=[

];
const router= new VueRouter({routes});

const app = new Vue({
    el: '#app',
    router: router
});
