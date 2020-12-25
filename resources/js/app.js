require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('congratulation-forms-component', require('./components/CongratulationFormsComponent').default);
Vue.component('congratulation-user-component', require('./components/CongratulationUserComponent').default);
Vue.component('slider-component', require('./components/SliderComponent').default);
Vue.component('catalog-component', require('./components/CatalogComponent').default);
Vue.component('personal-account', require('./components/PersonalAccount').default);
Vue.component('offer-to-join', require('./components/OfferToJoin').default);
Vue.component('join-group', require('./components/JoinGroup').default);


const app = new Vue({
    el: '#app',
});
