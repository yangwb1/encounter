
require('./bootstrap');


window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));


require('./components/SelectDistrict');
require('./components/UserAddressesCreateAndEdit');

const app = new Vue({
    el: '#app'
});