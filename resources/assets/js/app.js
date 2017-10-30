
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import Fullpage from './fullpage';

require('./bootstrap');
Vue.use(Fullpage)
import animate from 'animate.css'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('Index', require('./pages/Index'));
Vue.component('Job', require('./pages/Job'));
Vue.component('Work', require('./pages/Work'));
Vue.component('Contact', require('./pages/Contact'));
Vue.component('About', require('./pages/about'));
Vue.component('Game', require('./pages/Game'));
Vue.component('Show', require('./pages/Show'));
Vue.component('News', require('./pages/News'));
Vue.component('Fullpage', require('./pages/Fullpage'));


// mobile
Vue.component('MWork', require('./pages/m/Work'));
const app = new Vue({
    el: '#app'
});
