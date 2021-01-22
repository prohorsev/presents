require('./bootstrap')

import Vue from 'vue'
import VueRouter from 'vue-router'
import Main from './Main'
import router from './router'


Vue.use(VueRouter)

new Vue({
    router,
    render: h => h(Main)
}).$mount('#app');

