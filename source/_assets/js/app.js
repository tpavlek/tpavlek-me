

import Vue from 'vue';
import Search from './components/Search.vue';
import AblegBingo from "./components/AblegBingo";
import MaskExemption from "./components/MaskExemption";
import hljs from 'highlight.js/lib/core';
import ElxnBingo from "./components/ElxnBingo";

window.axios = require('axios');
window.fuse = require('fuse.js');
window.Vue = Vue;

// Syntax highlighting
hljs.registerLanguage('bash', require('highlight.js/lib/languages/bash'));
hljs.registerLanguage('css', require('highlight.js/lib/languages/css'));
hljs.registerLanguage('html', require('highlight.js/lib/languages/xml'));
hljs.registerLanguage('javascript', require('highlight.js/lib/languages/javascript'));
hljs.registerLanguage('json', require('highlight.js/lib/languages/json'));
hljs.registerLanguage('markdown', require('highlight.js/lib/languages/markdown'));
hljs.registerLanguage('php', require('highlight.js/lib/languages/php'));
hljs.registerLanguage('scss', require('highlight.js/lib/languages/scss'));
hljs.registerLanguage('yaml', require('highlight.js/lib/languages/yaml'));

document.querySelectorAll('pre code').forEach((block) => {
    hljs.highlightBlock(block);
});

Vue.config.productionTip = false;

Vue.component('ableg-bingo', AblegBingo);
Vue.component('elxn-bingo', ElxnBingo);
Vue.component('mask-exemption', MaskExemption);

new Vue({
});

