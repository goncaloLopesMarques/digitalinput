require('./bootstrap');
import StoreData from './store';
import Vuex from 'vuex';

window.Vue = require('vue');
Vue.config.devtools = true

Vue.use(Vuex);
const store = new Vuex.Store(StoreData);

Vue.component('orcamento', require('./components/Orcamento.vue'));
Vue.component('site-estatico', require('./components/SiteEstatico.vue'));
Vue.component('site-dinamico', require('./components/SiteDinamico.vue'));

const app = new Vue({
    el: '#app',
    store,
});

