require('./bootstrap');

import Vue from 'vue'
console.log('is running');
Vue.component('home', require('./components/Home.vue').default);

const app = new Vue({
    el: "#app"
});

