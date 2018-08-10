require('./bootstrap');
import StoreData from './store';
import Vuex from 'vuex';
import 'jquery';

window.Vue = require('vue');
Vue.config.devtools = true

Vue.use(Vuex);
const store = new Vuex.Store(StoreData);

Vue.component('orcamento', require('./components/Orcamento.vue'));
Vue.component('site-dinamico', require('./components/SiteDinamico.vue'));
Vue.component('site-dinamico-fase2', require('./components/SiteDinamicoFase2.vue'));
Vue.component('site-dinamico-fase3', require('./components/SiteDinamicoFase3.vue'));
Vue.component('site-dinamico-fase4', require('./components/SiteDinamicoFase4.vue'));
Vue.component('terminate', require('./components/Terminate.vue'));
Vue.component('orcamento-app', require('./components/OrcamentoApp.vue'));
Vue.component('navigationBar', require('./components/NavigationBar.vue'));
Vue.component('marketing-digital-fase1', require('./components/MDFase1.vue'));
Vue.component('marketing-digital-fase2', require('./components/MDFase2.vue'));

const app = new Vue({
    el: '#app',
    store,
});

