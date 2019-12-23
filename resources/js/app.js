
require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './App.vue';

Vue.use(VueAxios,axios);
// ancien process
// Vue.component('vols-component', require('./components/VolsComponent.vue').default);
// Vue.component('vols', require('./components/Vols.vue'));
// const app = new Vue({
//     el: '#app',
// });

import HomeComponent from './components/HomeComponent.vue';
import VolsComponent from './components/VolsComponent.vue';
import ListVolsComponent from './components/ListVolsComponent.vue';

const routes = [
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        name: 'vols',
        path: '/vols',
        component: VolsComponent
    },
    {
        name: 'all',
        path: '/all',
        component: ListVolsComponent
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');

