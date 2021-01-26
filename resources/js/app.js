import Vue from "vue";

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('navbar', require('./components/Navbar').default);
Vue.component("login", require("./components/Login").default);
const app = new Vue({
    el: '#app',
});
