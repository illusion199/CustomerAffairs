
//import iView from 'iview';
//import iView from 'iview/dist/iview.min';
Vue.use(iView);

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
//import iView from 'iview';
require('./bootstrap');

//window.Vue = require('vue');
//require('iview');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('ExampleComponent', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    /*   components: {
          ExampleComponent
      } */

});
