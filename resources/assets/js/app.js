require('./bootstrap');

window.Vue = require('vue');

import 'onsenui/css/onsenui.css';
import 'onsenui/css/onsen-css-components.css';

import Vue from 'vue';
import VueOnsen from 'vue-onsenui';

Vue.use(VueOnsen);

Vue.component('rss-list', require('./components/RssList.vue'));

const app = new Vue({
    el: '#app'
});
