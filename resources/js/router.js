import VueRouter from 'vue-router'

import Home from './pages/Home'
import Catalog from './pages/Catalog';
import Profile from "./pages/Profile";
import Room from "./pages/Room";

export default new VueRouter( {
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/catalog',
            name: 'catalog',
            component: Catalog
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile
        },
        {
            path: '/room',
            name: 'room',
            component: Room
        },
    ]
})
