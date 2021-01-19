require('./bootstrap');
import store from './store.js';
import VueClipboard from 'vue-clipboard2'

window.Vue = require('vue');
Vue.use(VueClipboard)

Vue.component('congratulation-forms-component', require('./components/CongratulationFormsComponent').default);
Vue.component('congratulation-user-component', require('./components/CongratulationUserComponent').default);
Vue.component('slider-component', require('./components/SliderComponent').default);
Vue.component('offer-to-join', require('./components/OfferToJoin').default);
Vue.component('join-group', require('./components/JoinGroup').default);
Vue.component('chat-component', require('./components/ChatComponent').default);
Vue.component('budget-component', require('./components/BudgetComponent').default);
Vue.component('clipboard-component', require('./components/ClipboardComponent').default);
Vue.component('users-budget-component', require('./components/UsersBudgetComponent').default);


const app = new Vue({
    el: '#app',
    store: new Vuex.Store(store)
});
