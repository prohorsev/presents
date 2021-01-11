import VueRouter from 'vue-router'

import Home from './pages/Home'
import Catalog from './pages/Catalog';
import Profile from "./pages/Profile";
import NotFound from './pages/404'


//Room
import List from "./pages/room/List";
import Create from "./pages/room/Create";
import Show from "./pages/room/Show";
import Invite from "./pages/room/Invite";
import Edit from "./pages/room/Edit";

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
            path: '/room/list',
            name: 'roomList',
            component: List
        },
        {
            path: '/room/create',
            name: 'roomCreate',
            component: Create
        },
        {
            path: '/room/:id',
            name: 'roomPage',
            component: Show
        },
        {
            path: '/room/invite',
            name: 'roomInvite',
            component: Invite
        },
        {
            path: '/room/edit',
            name: 'roomEdit',
            component: Edit
        },
        { path: '*', component: NotFound }
    ]
})
