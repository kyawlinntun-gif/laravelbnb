import ExampleComponent from './components/ExampleComponent.vue';
import VueRouter from 'vue-router';

const routes = [
    {
        path: '/',
        component: ExampleComponent,
        name: 'home'
    }
]

const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

export default router;
