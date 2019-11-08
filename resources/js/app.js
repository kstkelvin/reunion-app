/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/
require('./bootstrap');

window.Vue = require('vue');

import moment from 'moment';
import VueMoment from 'vue-moment';

// Load Locales ('en' comes loaded by default)
require('moment/locale/pt-br');

// Choose Locale
moment.locale('pt-br');

Vue.use(VueMoment, { moment });


/**
* The following block of code may be used to automatically register your
* Vue components. It will recursively scan this directory for the Vue
* components and automatically register them with their "basename".
*
* Eg. ./components/reserveComponent.vue -> <reserve-component></reserve-component>
*/

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('reserve-component', require('./components/ReserveComponent.vue').default);

/**
* Next, we will create a fresh Vue application instance and attach it to
* the page. Then, you may begin adding components to this application
* or customize the JavaScript scaffolding to fit your unique needs.
*/

var date = new Date();


const app = new Vue({
  el: '#app'
});

Vue.component('reserva', {
  data: function () {
    return {
      dia_registrado: moment()
    }
  },
  methods: {
    add_day: function () {
      this.dia_registrado.add(1, 'days');
    }
  },
  computed: {
    show_day: function (){
      return moment(this.dia_registrado).format('L')
    }
  },
  template: '<button v-on:click="add_day()">{{ show_day }}</button>'
})

new Vue({ el: '#dia-reserva' })
