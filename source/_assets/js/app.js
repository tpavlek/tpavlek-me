window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

Vue.component('ableg-bingo', require('./components/AblegBingo.vue'));
Vue.component('elxn-bingo', require('./components/ElxnBingo.vue'));
Vue.component('mask-exemption', require('./components/MaskExemption.vue'));




