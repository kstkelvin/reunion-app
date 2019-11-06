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




const app = new Vue({
  el: '#app'
});

Vue.component('calendario', {
  data:
  function () {
    return {
      dia: new Date().getDate(),
      mes: parseInt(new Date().getMonth())+1,
      ano: new Date().getFullYear()
    }
  },
  template: `
  <div>
    <a href="#"> << </a>
    <a href="#"> < </a>
    <p>{{ dia }}/{{ mes }}/{{ ano }}</p>
    <a href="#">></a>
    <a href="#">>></a>
  </div>
  `
})

new Vue({ el: '#components-reserva' })
