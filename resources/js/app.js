/**
* First we will load all of this project's JavaScript dependencies which
* includes Vue and other libraries. It is a great starting point when
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');

window.Vue = require('vue');

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
  el: '#app',
  data: {
    dia_reserva: new Date()
  },
  methods: {
    next(){
      this.dia_reserva.setDate(this.dia_reserva.getDate()+1)
    }  
  }
});

Vue.component('calendario', {
  template: `
  <div>
  <a href="#"> << </a>
  <a href="#"> < </a>
  <p>{{dia_reserva}}</p>
  <a href="#" v-on:click="nextDay">></a>
  <a href="#">>></a>
  </div>
  `,
  data() {
    return {
      dia_reserva: this.dia_reserva.getDate()
    }
  },
  methods:{
    nextDay(){
      this.$emit('next-day')
    }
  }
})

new Vue({ el: '#components-reserva' })
