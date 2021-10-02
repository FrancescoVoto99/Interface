/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))




Vue.component('cruscotto', require('./components/cruscotto.vue').default);
Vue.component('messagebox', require('./components/MessageBox.vue').default);
Vue.component('grafico', require('./components/grafico.vue').default);
Vue.component('togglevs', require('./components/togglevs.vue').default);
Vue.component('albero', require('./components/composealbero.vue').default);
Vue.component('subsystems', require('./components/subsystems.vue').default);


import {
  
    Button,
    
  } from "element-ui";
  import "element-ui/lib/theme-chalk/index.css";
  
  
  
  Vue.component(Button.name, Button);
  
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
   
});
