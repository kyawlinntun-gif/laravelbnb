import Bookables from './Bookables/Bookables';
import Bookable from './Bookable/Bookable';
import VueRouter from 'vue-router';

const routes = [
    {
        path: '/',
        component: Bookables,
        name: 'home'
    },
    {
        path: '/bookable/:id',
        component: Bookable,
        name: 'bookable'
    }
]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

export default router;
