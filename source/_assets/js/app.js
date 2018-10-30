window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');
import VueJsonp from 'vue-jsonp'

Vue.component('email-signup', require('./components/EmailSignup.vue'));
Vue.use(VueJsonp);

const vue = new Vue({
    'el': '#root'
});


